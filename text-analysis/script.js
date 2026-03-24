function analyzeText() {

    let text = document.getElementById("textInput").value;

    if (text.trim() === "") {
        document.getElementById("output").innerHTML = "Please enter some text.";
        return;
    }

    let charCount = text.length;
    let words = text.trim().split(/\s+/);
    let wordCount = words.length;
    let reversed = text.split("").reverse().join("");

    document.getElementById("output").innerHTML =
        "Characters: " + charCount + "<br>" +
        "Words: " + wordCount + "<br>" +
        "Reversed Text: " + reversed;
}