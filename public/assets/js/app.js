// const input = document.querySelector("#search");
// const resultsDiv = document.querySelector("#results");

// input.addEventListener("input", async () => {
//     const query = input.value;

//     const response = await fetch(
//         `/index.php?action=search&q=${encodeURIComponent(query)}`
//     );

//     const data = await response.json();

//     resultsDiv.innerHTML = data
//         .map(name => `
//             <div class="card">
//                 <h3>${name.name}</h3>
//                 <p>${name.origin}</p>
//                 <small>${name.meaning}</small>
//             </div>
//         `)
//         .join('');
// });

const input = document.querySelector("#search");
const resultsDiv = document.querySelector("#results");

// Function to render cards (for search results)
function renderCards(data) {
    if (data.length === 0) {
        resultsDiv.innerHTML = "<p>No names found.</p>";
        return;
    }

    resultsDiv.innerHTML = data
        .map(name => `
            <div class="card mb-2">
                <div class="card-body">
                    <h5 class="card-title">${name.name}</h5>
                    ${name.origin ? `<p class="card-text">Origin: ${name.origin}</p>` : ''}
                    ${name.meaning ? `<small class="text-muted">Meaning: ${name.meaning}</small>` : ''}
                </div>
            </div>
        `)
        .join('');
}

// Function to render table (for initial load of all names)
function renderTable(data) {
    if (data.length === 0) {
        resultsDiv.innerHTML = "<p>No names found.</p>";
        return;
    }

    let html = '<table class="table table-striped">';
    html += '<thead><tr><th>ID</th><th>Name</th></tr></thead><tbody>';

    data.forEach(row => {
        html += `<tr><td>${row.id}</td><td>${row.name}</td></tr>`;
    });

    html += '</tbody></table>';
    resultsDiv.innerHTML = html;
}

// Load all names on page load
window.addEventListener("DOMContentLoaded", async () => {
    try {
        const response = await fetch('index.php?action=getNames');
        const data = await response.json();
        renderTable(data);
    } catch (err) {
        console.error('Error fetching all names:', err);
        resultsDiv.innerHTML = "<p>Failed to load names.</p>";
    }
});

// Search as user types
input.addEventListener("input", async () => {
    const query = input.value.trim();

    if (query.length < 2) {
        // If search is too short, reload full table
        try {
            const response = await fetch('index.php?action=getNames');
            const data = await response.json();
            renderTable(data);
        } catch {
            resultsDiv.innerHTML = "<p>Failed to load names.</p>";
        }
        return;
    }

    try {
        const response = await fetch(`index.php?action=search&q=${encodeURIComponent(query)}`);
        const data = await response.json();
        renderCards(data);
    } catch {
        resultsDiv.innerHTML = "<p>Search failed.</p>";
    }
});