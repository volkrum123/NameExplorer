
//Gets the web page elements
const input = document.querySelector("#search");
const resultsDiv = document.querySelector("#results");

//SearchBar function:
function renderCards(data) {
    //Checks if a name has been entered
    if (data.length === 0) {
        resultsDiv.innerHTML = "<p>No names found.</p>";
        return;
    }
    //Creates cards, appends the filterd name, and instert it into the results div container
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

// TableName function
function renderTable(data) {
    //Checks if names exist
    if (data.length === 0) {
        resultsDiv.innerHTML = "<p>No names found.</p>";
        return;
    }

    //Creates the entire table header
    let html = '<table class="table table-striped">';
    html += '<thead><tr><th>ID</th><th>Name</th></tr></thead><tbody>';

    //Loops trough the available data and appends it as a row to the table body
    data.forEach(row => {
        html += `<tr><td>${row.id}</td><td>${row.name}</td></tr>`;
    });
    //Closing tags for the body and table
    html += '</tbody></table>';
    resultsDiv.innerHTML = html;
}

// Windowloader eventhandeler
window.addEventListener("DOMContentLoaded", async () => {
    try {
        //Request names from backend
        const response = await fetch('index.php?action=getNames');
        //Stores returned result
        const data = await response.json();
        //call renderTable function
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