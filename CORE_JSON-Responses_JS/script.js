['dummyData', 'clientsData'].forEach(x => {
    document.getElementById(x).innerHTML = "Daten werden gefetched!";
});

fetch('https://jsonplaceholder.typicode.com/todos/1')
    .then((response) => response.json())
    .then((data) => {
        document.querySelector('#dummyData').innerHTML =
            `<p class="flex-col align-middle justify-center">userID: ${data.userId},</p>
            <p class="flex-col align-middle justify-center">id: ${data.id},</p>
            <p class="flex-col align-middle justify-center">title: ${data.title},</p>
            <p class="flex-col align-middle justify-center">completed: ${data.completed}</p>`;
        console.log(data);
    })

fetch('data/OpenJsonData.json')
    .then((response) => response.json())
    .then((data) => {
        document.querySelector('#clientsData').innerHTML = JSON.stringify(data[0]);
        console.log(data);
    })