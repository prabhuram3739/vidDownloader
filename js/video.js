function showurl(info) {
    info = info + 1;
    document.getElementById("video_link").value = "";
    for (i = 1; i <= 5; i++) {
        if (i != info) {
            document.getElementById('example_' + i).style.display = 'none';
        } else { document.getElementById('example_' + i).style.display = 'inline'; }
    }
}