require('./bootstrap');

document.getElementById("brgr_icon").addEventListener("click", function() {
    if (document.getElementById("list_of_menu").classList.contains("hidden")) {
        document.getElementById("list_of_menu").classList.remove("hidden");
    } else {
        document.getElementById("list_of_menu").classList.add("hidden");
    }
})

document.getElementById("add_input").addEventListener("click", function() {
    add_input()
})

function add_input() {
    var counter = document.getElementById("counter")
    var valueCount = parseInt(counter.value)
    valueCount += 1
    counter.setAttribute("value", valueCount)

    var listForm = document.getElementById("list_input_form")

    const inputArr = []

    for (let index = 0; index < valueCount; index++) {
        var div = document.createElement("div")
        div.setAttribute("id", "column" + index)

        var labelForm = document.createElement("label")
        labelForm.setAttribute("for", "column" + index)
        labelForm.setAttribute("class", "label-form")
        labelForm.innerHTML = "Kolom " + parseInt(index + 1)

        var insideDiv = document.createElement("div")
        insideDiv.setAttribute("class", "inline-flex w-full")

        var inputForm = document.createElement("input")
        inputForm.setAttribute("type", "text")
        inputForm.setAttribute("name", "column" + index)
        inputForm.setAttribute("class", "input-form")

        var buttonDiv = document.createElement("div")
        buttonDiv.setAttribute("id", "remove_input")
        buttonDiv.setAttribute("class", "button-remove-form")
        buttonDiv.setAttribute("value", index)
        buttonDiv.innerHTML = 
                    '<svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">' +
                        '<path fill-rule="evenodd" d="M5 10a1 1 0 011-1h8a1 1 0 110 2H6a1 1 0 01-1-1z" clip-rule="evenodd" />' +
                    '</svg>'
        buttonDiv.addEventListener("click", function () {
            listForm.removeChild(div)
            var valueNow = parseInt(document.getElementById("counter").value)
            counter.setAttribute("value", parseInt(valueNow - 1))
        })

        insideDiv.appendChild(inputForm)
        insideDiv.appendChild(buttonDiv)
        
        div.appendChild(labelForm)
        div.appendChild(insideDiv)

        inputArr.push(div)
    }

    listForm.innerHTML = ""

    for (let index = 0; index < inputArr.length; index++) {
        listForm.appendChild(inputArr[index])
    }
}

{/* <div>
    <label for="group_name" class="label-form">Kolom 1: </label>
    <div class="inline-flex w-full">
        <input type="text" name="name" class="input-form">
        <div id="remove_input" class="button-remove-form">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                <path fill-rule="evenodd" d="M5 10a1 1 0 011-1h8a1 1 0 110 2H6a1 1 0 01-1-1z" clip-rule="evenodd" />
            </svg>
        </div>
    </div>
</div> */}