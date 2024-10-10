import * as FilePond from 'filepond';
import 'filepond/dist/filepond.min.css';
import "./editor.js"
// Get a reference to the file input element
const inputElement = document.querySelector('input[type="file"]');

// Create a FilePond instance
const pond = FilePond.create(inputElement, {
    required: true,
    allowMultiple: true,
    storeAsFile: true,
    credits: false,
    labelIdle : 'Drag & Drop your photos or <span class="filepond--label-action"> Browse </span>'
});

