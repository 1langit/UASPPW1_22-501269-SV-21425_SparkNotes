document.addEventListener('DOMContentLoaded', function () {
    // Load notes on page load
    loadNotes();
    getUsername();

    // Handle note form submit
    document.getElementById('note-form').addEventListener('submit', function (event) {
        event.preventDefault();
        var noteId = document.getElementById('note-id').value;
        var noteTitle = document.getElementById('note-title').value;
        var noteContent = document.getElementById('note-content').value;

        if (noteId === '') {
            createNote(noteTitle, noteContent);
        } else {
            deleteNote(noteId);
            createNote(noteTitle, noteContent);
        }

        // Clear form inputs
        document.getElementById('note-id').value = '';
        document.getElementById('note-title').value = '';
        document.getElementById('note-content').value = '';
    });

    // Handle note edit button click
    document.addEventListener('click', function (event) {
        var target = event.target;
        if (target.classList.contains('edit-btn')) {
            var noteCard = target.closest('.note-card');
            var noteId = noteCard.getAttribute('data-note-id');
            var noteTitle = noteCard.querySelector('.card-title').textContent;
            var noteContent = noteCard.querySelector('.card-content').textContent;

            // Populate form inputs with selected note data
            document.getElementById('note-id').value = noteId;
            document.getElementById('note-title').value = noteTitle;
            document.getElementById('note-content').value = noteContent;
        }
    });

    // Handle note delete button click
    document.addEventListener('click', function (event) {
        var target = event.target;
        if (target.classList.contains('delete-btn')) {
            var noteCard = target.closest('.note-card');
            var noteId = noteCard.getAttribute('data-note-id');

            if (confirm('Are you sure you want to delete this note?')) {
                deleteNote(noteId);
            }
        }
    });
});

function loadNotes() {
    var xhr = new XMLHttpRequest();
    xhr.open('GET', '../php/get_notes.php', true);
    xhr.onreadystatechange = function () {
        if (xhr.readyState === 4 && xhr.status === 200) {
            document.getElementById('notes-list').innerHTML = xhr.responseText;
        }
    };
    xhr.send();
}

function createNote(title, content) {
    var xhr = new XMLHttpRequest();
    xhr.open('POST', '../php/create_note.php', true);
    xhr.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
    xhr.onreadystatechange = function () {
        if (xhr.readyState === 4 && xhr.status === 200) {
            loadNotes();
        }
    };
    var data = 'title=' + encodeURIComponent(title) + '&content=' + encodeURIComponent(content);
    xhr.send(data);
}

function deleteNote(id) {
    var xhr = new XMLHttpRequest();
    xhr.open('POST', '../php/delete_note.php', true);
    xhr.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
    xhr.onreadystatechange = function () {
        if (xhr.readyState === 4 && xhr.status === 200) {
            loadNotes();
        }
    };
    var data = 'id=' + encodeURIComponent(id);
    xhr.send(data);
}

function getUsername() {
    var xhr = new XMLHttpRequest();
    xhr.open('GET', '../php/get_account.php', true);
    xhr.onreadystatechange = function () {
        if (xhr.readyState === 4 && xhr.status === 200) {
            document.getElementById('username').innerHTML = xhr.responseText;
        }
    };
    xhr.send();
}
