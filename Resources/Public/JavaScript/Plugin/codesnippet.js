import {ClassicEditor, CodeBlock} from "@typo3/ckeditor5-bundle.js";

ClassicEditor
    .create(document.querySelector('#editor'), {
        codeBlock: {
            languages: [
                {language: 'plaintext', label: 'Plain text', class: ''},
                {language: 'php', label: 'PHP', class: 'php-code'},
                {language: 'javascript', label: 'JavaScript', class: 'js-code'},
                {language: 'python', label: 'Python', class: 'py-code'},
                {language: 'sql', label: 'SQL', class: 'sql-code'},
                {language: 'c', label: 'C', class: 'c-code'},
                {language: 'cs', label: 'C#', class: 'c-sharp-code'},
                {language: 'cpp', label: 'C++', class: 'c-plus-code'},
                {language: 'css', label: 'CSS', class: 'css-code'},
                {language: 'diff', label: 'Diff', class: 'diff-code'},
                {language: 'html', label: 'HTML', class: 'html-code'},
                {language: 'java', label: 'Java', class: 'java-code'},
                {language: 'ruby', label: 'Ruby', class: 'ruby-code'},
                {language: 'typescript', label: 'TypeScript', class: 'ts-code'},
                {language: 'xml', label: 'XML', class: 'xml-code'}
            ]
        }
    })
    .then( /* ... */)
    .catch( /* ... */);