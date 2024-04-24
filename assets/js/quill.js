const quill = new Quill('#editor', {
    modules: {
        toolbar: [
            [{ 'font':[]}, { header:[false, 1, 2]}],
            [ 'bold', 'italic', 'underline', 'strike', 'image', 
            {'list':'ordered'}, {'list':'bullet'}, {'list':'check'}, 
            { 'color':[]}, {'background':[]}, {'align':[]},],  
        ],
    },
    placeholder: 'Start blog here...',
    theme: 'snow'
});