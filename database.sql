-- PostgreSQL Database Setup for Dermessence Clinic Admin Panel
-- Created: November 10, 2025

-- =====================================================
-- Table: contacts
-- Purpose: Store all contact form submissions
-- =====================================================
CREATE TABLE IF NOT EXISTS contacts (
    id SERIAL PRIMARY KEY,
    name VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL,
    phone VARCHAR(20) DEFAULT NULL,
    subject VARCHAR(500) NOT NULL,
    message TEXT NOT NULL,
    status VARCHAR(20) DEFAULT 'pending' CHECK (status IN ('pending', 'read', 'completed')),
    admin_notes TEXT DEFAULT NULL,
    ip_address VARCHAR(45) DEFAULT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

CREATE INDEX IF NOT EXISTS idx_contacts_status ON contacts(status);
CREATE INDEX IF NOT EXISTS idx_contacts_created_at ON contacts(created_at);
CREATE INDEX IF NOT EXISTS idx_contacts_email ON contacts(email);

-- =====================================================
-- Table: appointments
-- Purpose: Store all appointment booking requests
-- =====================================================
CREATE TABLE IF NOT EXISTS appointments (
    id SERIAL PRIMARY KEY,
    name VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL,
    phone VARCHAR(20) NOT NULL,
    age INTEGER DEFAULT NULL,
    service VARCHAR(255) NOT NULL,
    preferred_date DATE NOT NULL,
    preferred_time VARCHAR(50) NOT NULL,
    notes TEXT DEFAULT NULL,
    status VARCHAR(20) DEFAULT 'pending' CHECK (status IN ('pending', 'approved', 'rejected', 'rescheduled')),
    admin_notes TEXT DEFAULT NULL,
    reschedule_reason TEXT DEFAULT NULL,
    original_date DATE DEFAULT NULL,
    original_time VARCHAR(50) DEFAULT NULL,
    ip_address VARCHAR(45) DEFAULT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

CREATE INDEX IF NOT EXISTS idx_appointments_status ON appointments(status);
CREATE INDEX IF NOT EXISTS idx_appointments_date ON appointments(preferred_date);
CREATE INDEX IF NOT EXISTS idx_appointments_email ON appointments(email);
CREATE INDEX IF NOT EXISTS idx_appointments_created_at ON appointments(created_at);

-- =====================================================
-- Table: admin_users
-- Purpose: Store admin login credentials
-- =====================================================
CREATE TABLE IF NOT EXISTS admin_users (
    id SERIAL PRIMARY KEY,
    username VARCHAR(100) NOT NULL UNIQUE,
    password_hash VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    last_login TIMESTAMP DEFAULT NULL
);

CREATE INDEX IF NOT EXISTS idx_admin_users_username ON admin_users(username);

-- =====================================================
-- Table: email_logs
-- Purpose: Track all sent emails for debugging
-- =====================================================
CREATE TABLE IF NOT EXISTS email_logs (
    id SERIAL PRIMARY KEY,
    recipient VARCHAR(255) NOT NULL,
    subject VARCHAR(500) NOT NULL,
    email_type VARCHAR(50) NOT NULL CHECK (email_type IN ('contact_submission', 'appointment_submission', 'appointment_approved', 'appointment_rejected', 'appointment_rescheduled')),
    status VARCHAR(20) DEFAULT 'sent' CHECK (status IN ('sent', 'failed')),
    sent_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

CREATE INDEX IF NOT EXISTS idx_email_logs_type ON email_logs(email_type);
CREATE INDEX IF NOT EXISTS idx_email_logs_sent_at ON email_logs(sent_at);

-- =====================================================
-- Insert Default Admin User
-- Username: admin
-- Password: dermessence2025 (CHANGE THIS AFTER FIRST LOGIN!)
-- Password hash generated using PHP password_hash()
-- =====================================================
INSERT INTO admin_users (username, password_hash, email) 
VALUES ('admin', '$2y$10$hgcTxQ9k73oWm0H7qDuhQ.HPZ1JJYL3GFWRYusGh4d4hArPiXBCqq', 's.drbrar@gmail.com')
ON CONFLICT (username) DO NOTHING;

-- Note: The password is 'dermessence2025'
-- To change password, use PHP: password_hash('your_password', PASSWORD_DEFAULT)
