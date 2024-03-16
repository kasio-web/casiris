//メニューの処理ここから 
  
var api_url = 'https://script.googleusercontent.com/macros/echo?user_content_key=ojS-_0vxqZHUue3F2cOsQxmeNAKpsX1c1DRMXJVIouarmOMJvZFvQIPQPgkln0E_yhSCl8H2nC8qAvLfx3IfEJoyL8b73cGhm5_BxDlH2jW0nuo2oDemN9CCS2h10ox_1xSncGQajx_ryfhECjZEnBcOktR5RXHk1WfD5H9T6Z2hI9XEUv4oL4UUMU27IaTiCDK5cybAiCPjG77Rl5w0ZBjYG10AXboZZpo3FKdrrTF8y5LKZ-jO4A&lib=MaHxQ0Vw8BAdpBT1HD3FEQMuHTBUTPoEf'; //生成したAPIのURLを指定

fetch(api_url)
.then(function (fetch_data) {
  return fetch_data.json();
})
.then(function (json) {
  for (var i in json) {
    // jsonの要素数だけ回す

    var base_element = document.getElementsByClassName('product-item js-based'); //元となるHTMLの要素を指定
    var clone_element = base_element[0].cloneNode(true); //元となるHTMLの要素を複製
    clone_element.classList.remove('js-based'); //複製した要素からクラス削除

    clone_element.querySelector('.category').textContent = json[i].category; //テキストに取得した商品名を設定

    // var price = new Intl.NumberFormat( 'ja-JP', {style: 'currency', currency: 'JPY'} ).format(json[i].price); //日本円と解釈し、3桁ごとのカンマ区切りにする
    // clone_element.querySelector('.price').textContent = price; //テキストに取得し、フォーマットした価格を設定
    
    base_element[0].parentNode.appendChild(clone_element); //元となるHTMLの要素の後ろに複製した要素を追加
  }
});
//メニューの処理ここまで