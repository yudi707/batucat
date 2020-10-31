function getColorIntoFilter(picker) {
    const rgb       = hexToRgb('#' + picker.toString());
    const color     = new Color(rgb[0], rgb[1], rgb[2]);
    const solver    = new Solver(color);
    const result    = solver.solve();
    return result;
}
function getColorName(picker) {
    var n_match  = ntc.name("#" + picker.toString());
    n_rgb        = n_match[0]; // This is the RGB value of the closest matching color
    n_name       = n_match[1]; // This is the text string for the name of the match
    n_exactmatch = n_match[2]; // True if exact color match, False if close-match
    return n_match[1];
}
function setFilterColor(picker, element) {
    var result = getColorIntoFilter(picker);
    element.style.color = '#' + picker.toString();
    element.setAttribute('style', 'filter: '+ 
        result.filter + 'opacity(.375) drop-shadow(0 0 0 #'+ picker.toString() +')');
    element.setAttribute('style', '-webkit-filter: '+ 
        result.filter + 'opacity(.375) drop-shadow(0 0 0 #'+ picker.toString() +')');
    return getColorName(picker);
}
function setColorA(picker) {
    var img = document.getElementById('part_a');
    document.querySelector('#btn_a').innerText = setFilterColor(picker, img);
}
function setColorB(picker) {
    var img = document.getElementById('part_b');
    document.querySelector('#btn_b').innerText = setFilterColor(picker, img);
}