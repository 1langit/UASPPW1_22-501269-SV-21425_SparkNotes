function updateTitle() {
    var elements = document.querySelectorAll("[id^='title']");
    
    elements.forEach(function(element) {
        var title = element.value;
        var preview = document.getElementById("preview" + element.id.substring(5));

        if (title !== "") {
            preview.innerHTML = title.substring(0, 16);
        } else {
            preview.innerHTML = "&nbsp;";

        }
    });

    var total = document.getElementById("total");
    total.innerHTML = sum;
}



const addBtn = document.getElementById("addBtn");
const nav = document.getElementById("note-nav");
const content = document.getElementById("note-content");

addBtn.addEventListener("click", ()=> {
    nav.innerHTML += `
        <li class="nav-item">
            <button class="nav-link w-100 rounded-0 text-dark" id="note2-tab" data-bs-toggle="tab" data-bs-target="#note2" type="button" role="tab" aria-controls="note2" aria-selected="false">
                <span class="fs-6">
                    <div id="preview2">New note</div>
                </span>
            </button>
        </li>
    `;
    content.innerHTML += `
        <div class="tab-pane" id="note2" role="tabpanel" aria-labelledby="note2-tab">
            <div class="container">
                <input type="text" class="form-control fs-1" id="title2" oninput="updateTitle()" placeholder="Title">
                <textarea class="form-control vh-100" placeholder="Type something..."></textarea>
            </div>
        </div>
    `;
});