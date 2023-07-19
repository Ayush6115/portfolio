
function deleteMessage(id) {
    if (confirm("Are you sure you want to delete this message?")) {
        var xhr = new XMLHttpRequest();
        xhr.open("POST", "delete_message.php", true);
        xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
        xhr.onreadystatechange = function () {
            if (xhr.readyState === 4 && xhr.status === 200) {

            }
        };
        xhr.send("id=" + id);
    }
}