const videos = [
    {url: `<iframe width="907" height="510" src="https://www.youtube.com/embed/CLJTmaoRSR4" title="Minecraft | How to Build a Starter House with Mine Entrance | Tutorial" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>`, name: "BRUHHH"}
];

var videoList = "";

videos.forEach(element => {
    videoList += `<${element.url}`;
});

document.getElementById('listBox').innerHTML = videoList;