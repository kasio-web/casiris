
var api_url = 'https://script.google.com/macros/s/AKfycbxL0IiOVhDg-VJhQA2UYiXKT_HB3KSOKJ2dt890j6YEtJFsp4oQSYfpGoFdYAY5kO4O/exec'; //生成したAPIのURLを指定

fetch(api_url)
.then(function (fetch_data) {
  return fetch_data.json();
})
.then(function (json) {
  for (var i in json) {
    // jsonの要素数だけ回す

    var base_element = document.getElementsByClassName('news-item js-based'); //元となるHTMLの要素を指定
    var clone_element = base_element[0].cloneNode(true); //元となるHTMLの要素を複製
    clone_element.classList.remove('js-based'); //複製した要素からクラス削除

    clone_element.querySelector('.news-title').textContent = json[i].title; //テキストにタイトルを設定
    clone_element.querySelector('.news-date').textContent = json[i].date; //テキストに日付を設定
    clone_element.querySelector('.news-excerpt').textContent = json[i].sentence; //テキストに本文を設定
      clone_element.querySelector('.news-link').setAttribute = json[i].link; //テキストに本文を設定

   //clone_element.querySelector('.news-link').textContent = json[i].link; //テキストにリンクを設定


    // var price = new Intl.NumberFormat( 'ja-JP', {style: 'currency', currency: 'JPY'} ).format(json[i].price); //日本円と解釈し、3桁ごとのカンマ区切りにする
    // clone_element.querySelector('.price').textContent = price; //テキストに取得し、フォーマットした価格を設定
    
    // json[i].colors.forEach(color => {
    //   if( color ) {
    //     //値が指定されているとき

    //     var base_color_element = clone_element.querySelector('.colors .js-based'); //元となるHTMLの要素を指定
    //     var color_clone_element = base_color_element.cloneNode(true); //元となるHTMLの要素を複製
    //     color_clone_element.classList.remove('js-based'); //複製した要素からクラス削除

    //     color_clone_element.querySelector('img').setAttribute( 'src', color ); //src属性を設定

        // base_color_element.parentNode.appendChild(color_clone_element); //元となるHTMLの要素の後ろに複製した要素を追加
  
    
    base_element[0].parentNode.appendChild(clone_element); //元となるHTMLの要素の後ろに複製した要素を追加
    }
    });
