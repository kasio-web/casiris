//住所などの内製化       
var api_url = 'https://script.google.com/macros/s/AKfycbw-nh714dC9UKsamz-1zL6fQqjY0prxooQlPuCXG_rVcvSLui7iMM0N4oHXeXIezw/exec'; //生成したAPIのURLを指定

fetch(api_url)
.then(function (fetch_data) {
  return fetch_data.json();
})
.then(function (json) {
  for (var i in json) {
    // jsonの要素数だけ回す

    var base_element = document.getElementsByClassName('store-information js-based'); //元となるHTMLの要素を指定
    var clone_element = base_element[0].cloneNode(true); //元となるHTMLの要素を複製
   clone_element.classList.remove('js-based'); //複製した要素からクラス削除

    clone_element.querySelector('.store-address').innerText = json[i].address; //住所など

    clone_element.querySelector('.store-tel').innerText = json[i].tel; //電話番号


    // var price = new Intl.NumberFormat( 'ja-JP', {style: 'currency', currency: 'JPY'} ).format(json[i].price); //日本円と解釈し、3桁ごとのカンマ区切りにする
    // clone_element.querySelector('.price').textContent = price; //テキストに取得し、フォーマットした価格を設定
    
    base_element[0].parentNode.appendChild(clone_element); //元となるHTMLの要素の後ろに複製した要素を追加
  }

});


// sp
//住所などの内製化       
var api_url = 'https://script.google.com/macros/s/AKfycbw-nh714dC9UKsamz-1zL6fQqjY0prxooQlPuCXG_rVcvSLui7iMM0N4oHXeXIezw/exec'; //生成したAPIのURLを指定

fetch(api_url)
.then(function (fetch_data) {
  return fetch_data.json();
})
.then(function (json) {
  for (var i in json) {
    // jsonの要素数だけ回す

    var base_element = document.getElementsByClassName('store-information02 js-based'); //元となるHTMLの要素を指定
    var clone_element = base_element[0].cloneNode(true); //元となるHTMLの要素を複製
   clone_element.classList.remove('js-based'); //複製した要素からクラス削除

    clone_element.querySelector('.store-address').innerText = json[i].address; //住所など

    clone_element.querySelector('.store-tel').innerText = json[i].tel; //電話番号


    // var price = new Intl.NumberFormat( 'ja-JP', {style: 'currency', currency: 'JPY'} ).format(json[i].price); //日本円と解釈し、3桁ごとのカンマ区切りにする
    // clone_element.querySelector('.price').textContent = price; //テキストに取得し、フォーマットした価格を設定
    
    base_element[0].parentNode.appendChild(clone_element); //元となるHTMLの要素の後ろに複製した要素を追加
  }

});