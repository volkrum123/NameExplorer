const input = document.querySelector("#search");
const resultsDiv = document.querySelector("#results");

input.addEventListener("input", async () => {
    const query = input.value;

    const response = await fetch(
        `/index.php?action=search&q=${encodeURIComponent(query)}`
    );

    const data = await response.json();

    resultsDiv.innerHTML = data
        .map(name => `
            <div class="card">
                <h3>${name.name}</h3>
                <p>${name.origin}</p>
                <small>${name.meaning}</small>
            </div>
        `)
        .join('');
});