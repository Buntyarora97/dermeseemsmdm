document.addEventListener('DOMContentLoaded', function() {
    loadDashboard();
    loadBookings();
    loadContacts();
    setupNavigation();
    setupFilters();
});

function setupNavigation() {
    const navItems = document.querySelectorAll('.nav-item');
    const viewAllLinks = document.querySelectorAll('.view-all');
    
    navItems.forEach(item => {
        item.addEventListener('click', function(e) {
            e.preventDefault();
            const tab = this.dataset.tab;
            switchTab(tab);
        });
    });
    
    viewAllLinks.forEach(link => {
        link.addEventListener('click', function(e) {
            e.preventDefault();
            const tab = this.dataset.tab;
            switchTab(tab);
        });
    });

    const menuToggle = document.getElementById('menuToggle');
    const sidebar = document.querySelector('.sidebar');
    
    if (menuToggle) {
        menuToggle.addEventListener('click', function() {
            sidebar.classList.toggle('active');
        });
    }
}

function switchTab(tabName) {
    document.querySelectorAll('.nav-item').forEach(item => {
        item.classList.remove('active');
    });
    document.querySelectorAll('.tab-content').forEach(content => {
        content.classList.remove('active');
    });
    
    document.querySelector(`[data-tab="${tabName}"]`).classList.add('active');
    document.getElementById(tabName).classList.add('active');
    
    const titles = {
        'dashboard': 'Dashboard',
        'bookings': 'Booking Enquiries',
        'contacts': 'Contact Enquiries'
    };
    document.getElementById('pageTitle').textContent = titles[tabName] || 'Dashboard';
}

function setupFilters() {
    const bookingFilter = document.getElementById('bookingFilter');
    const contactFilter = document.getElementById('contactFilter');
    
    if (bookingFilter) {
        bookingFilter.addEventListener('change', loadBookings);
    }
    
    if (contactFilter) {
        contactFilter.addEventListener('change', loadContacts);
    }
}

function loadDashboard() {
    const bookings = JSON.parse(localStorage.getItem('bookingSubmissions') || '[]');
    const contacts = JSON.parse(localStorage.getItem('contactSubmissions') || '[]');
    
    const pendingBookings = bookings.filter(b => b.status === 'pending');
    const unreadContacts = contacts.filter(c => c.status === 'unread');
    
    document.getElementById('totalBookings').textContent = bookings.length;
    document.getElementById('pendingBookings').textContent = pendingBookings.length;
    document.getElementById('totalContacts').textContent = contacts.length;
    document.getElementById('unreadContacts').textContent = unreadContacts.length;
    
    const recentBookingsContainer = document.getElementById('recentBookings');
    const recentBookings = bookings.slice(-5).reverse();
    
    if (recentBookings.length === 0) {
        recentBookingsContainer.innerHTML = '<p class="no-data-text">No booking enquiries yet</p>';
    } else {
        recentBookingsContainer.innerHTML = recentBookings.map(booking => `
            <div class="recent-item">
                <div class="recent-info">
                    <h4>${booking.name}</h4>
                    <p>${booking.service || 'General Consultation'} - ${booking.date}</p>
                </div>
                <span class="recent-date">${formatDate(booking.createdAt)}</span>
            </div>
        `).join('');
    }
    
    const recentContactsContainer = document.getElementById('recentContacts');
    const recentContacts = contacts.slice(-5).reverse();
    
    if (recentContacts.length === 0) {
        recentContactsContainer.innerHTML = '<p class="no-data-text">No contact enquiries yet</p>';
    } else {
        recentContactsContainer.innerHTML = recentContacts.map(contact => `
            <div class="recent-item">
                <div class="recent-info">
                    <h4>${contact.name}</h4>
                    <p>${contact.subject || 'No Subject'}</p>
                </div>
                <span class="recent-date">${formatDate(contact.createdAt)}</span>
            </div>
        `).join('');
    }
}

function loadBookings() {
    const bookings = JSON.parse(localStorage.getItem('bookingSubmissions') || '[]');
    const filter = document.getElementById('bookingFilter')?.value || 'all';
    
    let filteredBookings = bookings;
    if (filter !== 'all') {
        filteredBookings = bookings.filter(b => b.status === filter);
    }
    
    const tableBody = document.getElementById('bookingsTableBody');
    const noData = document.getElementById('noBookings');
    const tableContainer = document.querySelector('#bookings .table-container');
    
    if (filteredBookings.length === 0) {
        tableContainer.style.display = 'none';
        noData.style.display = 'block';
    } else {
        tableContainer.style.display = 'block';
        noData.style.display = 'none';
        
        tableBody.innerHTML = filteredBookings.reverse().map(booking => `
            <tr>
                <td>#${booking.id.toString().slice(-6)}</td>
                <td>${booking.name}</td>
                <td>${booking.phone}</td>
                <td>${booking.email || '-'}</td>
                <td>${booking.date}</td>
                <td>${booking.time}</td>
                <td>${booking.service || '-'}</td>
                <td><span class="status-badge ${booking.status}">${booking.status}</span></td>
                <td>
                    <button class="action-btn view" onclick="viewBooking(${booking.id})">
                        <i class="fas fa-eye"></i>
                    </button>
                    <button class="action-btn delete" onclick="deleteBooking(${booking.id})">
                        <i class="fas fa-trash"></i>
                    </button>
                </td>
            </tr>
        `).join('');
    }
}

function loadContacts() {
    const contacts = JSON.parse(localStorage.getItem('contactSubmissions') || '[]');
    const filter = document.getElementById('contactFilter')?.value || 'all';
    
    let filteredContacts = contacts;
    if (filter !== 'all') {
        filteredContacts = contacts.filter(c => c.status === filter);
    }
    
    const tableBody = document.getElementById('contactsTableBody');
    const noData = document.getElementById('noContacts');
    const tableContainer = document.querySelector('#contacts .table-container');
    
    if (filteredContacts.length === 0) {
        tableContainer.style.display = 'none';
        noData.style.display = 'block';
    } else {
        tableContainer.style.display = 'block';
        noData.style.display = 'none';
        
        tableBody.innerHTML = filteredContacts.reverse().map(contact => `
            <tr>
                <td>#${contact.id.toString().slice(-6)}</td>
                <td>${contact.name}</td>
                <td>${contact.email}</td>
                <td>${contact.phone}</td>
                <td>${contact.subject || '-'}</td>
                <td>${truncateText(contact.message, 50)}</td>
                <td>${formatDate(contact.createdAt)}</td>
                <td><span class="status-badge ${contact.status}">${contact.status}</span></td>
                <td>
                    <button class="action-btn view" onclick="viewContact(${contact.id})">
                        <i class="fas fa-eye"></i>
                    </button>
                    <button class="action-btn delete" onclick="deleteContact(${contact.id})">
                        <i class="fas fa-trash"></i>
                    </button>
                </td>
            </tr>
        `).join('');
    }
}

function viewBooking(id) {
    const bookings = JSON.parse(localStorage.getItem('bookingSubmissions') || '[]');
    const booking = bookings.find(b => b.id === id);
    
    if (!booking) return;
    
    document.getElementById('modalTitle').textContent = 'Booking Details';
    document.getElementById('modalBody').innerHTML = `
        <div class="detail-row"><label>Name:</label><span>${booking.name}</span></div>
        <div class="detail-row"><label>Phone:</label><span>${booking.phone}</span></div>
        <div class="detail-row"><label>Email:</label><span>${booking.email || '-'}</span></div>
        <div class="detail-row"><label>Date:</label><span>${booking.date}</span></div>
        <div class="detail-row"><label>Time:</label><span>${booking.time}</span></div>
        <div class="detail-row"><label>Service:</label><span>${booking.service || '-'}</span></div>
        <div class="detail-row"><label>Status:</label><span class="status-badge ${booking.status}">${booking.status}</span></div>
        ${booking.message ? `<div class="detail-row"><label>Message:</label></div><div class="message-text">${booking.message}</div>` : ''}
    `;
    
    document.getElementById('modalFooter').innerHTML = `
        <button class="btn-cancel" onclick="closeModal()">Close</button>
        <select onchange="updateBookingStatus(${id}, this.value)" style="padding: 10px 15px; border: 1px solid #e8e8e8; border-radius: 8px;">
            <option value="pending" ${booking.status === 'pending' ? 'selected' : ''}>Pending</option>
            <option value="confirmed" ${booking.status === 'confirmed' ? 'selected' : ''}>Confirmed</option>
            <option value="completed" ${booking.status === 'completed' ? 'selected' : ''}>Completed</option>
            <option value="cancelled" ${booking.status === 'cancelled' ? 'selected' : ''}>Cancelled</option>
        </select>
    `;
    
    document.getElementById('detailModal').classList.add('active');
}

function viewContact(id) {
    const contacts = JSON.parse(localStorage.getItem('contactSubmissions') || '[]');
    const contact = contacts.find(c => c.id === id);
    
    if (!contact) return;

    const index = contacts.findIndex(c => c.id === id);
    if (contacts[index].status === 'unread') {
        contacts[index].status = 'read';
        localStorage.setItem('contactSubmissions', JSON.stringify(contacts));
        loadContacts();
        loadDashboard();
    }
    
    document.getElementById('modalTitle').textContent = 'Contact Details';
    document.getElementById('modalBody').innerHTML = `
        <div class="detail-row"><label>Name:</label><span>${contact.name}</span></div>
        <div class="detail-row"><label>Email:</label><span>${contact.email}</span></div>
        <div class="detail-row"><label>Phone:</label><span>${contact.phone}</span></div>
        <div class="detail-row"><label>Subject:</label><span>${contact.subject || '-'}</span></div>
        <div class="detail-row"><label>Status:</label><span class="status-badge ${contact.status}">${contact.status}</span></div>
        <div class="detail-row"><label>Message:</label></div>
        <div class="message-text">${contact.message}</div>
    `;
    
    document.getElementById('modalFooter').innerHTML = `
        <button class="btn-cancel" onclick="closeModal()">Close</button>
        <button class="btn-primary" onclick="markAsReplied(${id})">Mark as Replied</button>
    `;
    
    document.getElementById('detailModal').classList.add('active');
}

function updateBookingStatus(id, status) {
    const bookings = JSON.parse(localStorage.getItem('bookingSubmissions') || '[]');
    const index = bookings.findIndex(b => b.id === id);
    
    if (index !== -1) {
        bookings[index].status = status;
        localStorage.setItem('bookingSubmissions', JSON.stringify(bookings));
        loadBookings();
        loadDashboard();
        closeModal();
    }
}

function markAsReplied(id) {
    const contacts = JSON.parse(localStorage.getItem('contactSubmissions') || '[]');
    const index = contacts.findIndex(c => c.id === id);
    
    if (index !== -1) {
        contacts[index].status = 'replied';
        localStorage.setItem('contactSubmissions', JSON.stringify(contacts));
        loadContacts();
        loadDashboard();
        closeModal();
    }
}

function deleteBooking(id) {
    if (!confirm('Are you sure you want to delete this booking?')) return;
    
    let bookings = JSON.parse(localStorage.getItem('bookingSubmissions') || '[]');
    bookings = bookings.filter(b => b.id !== id);
    localStorage.setItem('bookingSubmissions', JSON.stringify(bookings));
    loadBookings();
    loadDashboard();
}

function deleteContact(id) {
    if (!confirm('Are you sure you want to delete this contact?')) return;
    
    let contacts = JSON.parse(localStorage.getItem('contactSubmissions') || '[]');
    contacts = contacts.filter(c => c.id !== id);
    localStorage.setItem('contactSubmissions', JSON.stringify(contacts));
    loadContacts();
    loadDashboard();
}

function closeModal() {
    document.getElementById('detailModal').classList.remove('active');
}

function formatDate(dateStr) {
    if (!dateStr) return '-';
    const date = new Date(dateStr);
    return date.toLocaleDateString('en-IN', {
        day: '2-digit',
        month: 'short',
        year: 'numeric'
    });
}

function truncateText(text, maxLength) {
    if (!text) return '-';
    if (text.length <= maxLength) return text;
    return text.substring(0, maxLength) + '...';
}

document.getElementById('detailModal').addEventListener('click', function(e) {
    if (e.target === this) {
        closeModal();
    }
});
