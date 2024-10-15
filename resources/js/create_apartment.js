import * as FilePond from 'filepond';

// Import the plugin code
import FilePondPluginImageEdit from 'filepond-plugin-image-edit';
// Import the plugin styles
import 'filepond-plugin-image-edit/dist/filepond-plugin-image-edit.css';
// Import the plugin code
import FilePondPluginImageExifOrientation from 'filepond-plugin-image-exif-orientation';
// Import the plugin code
// Import the plugin styles
import 'filepond-plugin-image-edit/dist/filepond-plugin-image-edit.css';
// Import the plugin code
import FilePondPluginImagePreview from 'filepond-plugin-image-preview';

import 'filepond/dist/filepond.min.css';
// Import the plugin styles
import 'filepond-plugin-image-preview/dist/filepond-plugin-image-preview.css';
import '@pqina/pintura/pintura.css';
import { openDefaultEditor } from '@pqina/pintura';


import "./editor.js"
// Get a reference to the file input element
const inputElement = document.querySelector('input[type="file"]');
FilePond.registerPlugin(
    FilePondPluginImagePreview,
    FilePondPluginImageExifOrientation,
    //FilePondPluginFileValidateSize,
    FilePondPluginImageEdit
);
// Create a FilePond instance
const pond = FilePond.create(inputElement, {
    required: true,
    // server: {
    //     restore: '/api/restore'
    // },
    allowMultiple: true,
    storeAsFile: true,
    credits: false,
    allowReorder: true,
    name: "images[]",
    labelIdle : 'Drag & Drop your photos or <span class="filepond--label-action"> Browse </span>'
});

