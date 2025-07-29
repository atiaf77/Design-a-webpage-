document.getElementById('dataForm').addEventListener('submit', async function(event) {
    event.preventDefault();
    const formData = new FormData(event.target);

    const response = await fetch('submit.php', {
        method: 'POST',
        body: formData
    });

    if (response.ok) {
        loadTableData();
    } else {
        alert('Failed to submit data');
    }
});

async function loadTableData() {
    const response = await fetch('fetch.php');
    const data = await response.json();

    const tbody = document.getElementById('dataTable').querySelector('tbody');
    tbody.innerHTML = '';

    data.forEach(record => {
        const row = document.createElement('tr');
        row.innerHTML = `
            <td>${record.id}</td>
            <td>${record.name}</td>
            <td>${record.age}</td>
            <td>${record.status}</td>
            <td><button class="toggle ${record.status === 1 ? 'active' : ''}" onclick="toggleStatus(${record.id})">Toggle</button></td>
        `;
        tbody.appendChild(row);
    });
}

async function toggleStatus(id) {
    const response = await fetch('toggle.php', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json'
        },
        body: JSON.stringify({ id })
    });

    if (response.ok) {
        loadTableData();
    } else {
        alert('Failed to toggle status');
    }
}

loadTableData();
