/****************
 * Js  encryption *
 * ***************/
document.getElementById('encryption').oninput = function () {
    const offet = 3;
    let out = '';
    for (let i = 0; i < str.length; i++) {
        let code = str.charCodeAt(i);
        code = code + offet;
        out += String.fromCharCode(code);
    }
    document.getElementById('encryption_text').innerHTML = out;
}
/*****************
 * End encryption *
 *****************/
/****************
 * Js decryption *
 ****************/
document.getElementById('decryption').oninput = function () {
    const offet = 3;
    let str = this.value;
    let out = '';
    for (let i = 0; i < str.length; i++) {
        let code = str.charCodeAt(i);
        code = code - offet;
        out += String.fromCharCode(code);
    }
    document.getElementById('decryption_text').innerHTML = out;

}
/*****************
 * Js decryption  *
 ****************/