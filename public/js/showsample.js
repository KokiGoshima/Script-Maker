

function copy1(){
  //範囲を指定
  let range = document.createRange();
  let span = document.getElementById('english-script1');
  range.selectNodeContents(span);

  //指定した範囲を選択状態にする
  let selection = document.getSelection();
  selection.removeAllRanges();
  selection.addRange(range);

  //コピー
  
  document.execCommand('copy');
  alert('コピーしました');
}


function copy2(){
  //範囲を指定
  let range = document.createRange();
  let span = document.getElementById('english-script2');
  range.selectNodeContents(span);

  //指定した範囲を選択状態にする
  let selection = document.getSelection();
  selection.removeAllRanges();
  selection.addRange(range);

  //コピー
  document.execCommand('copy');
  alert('コピーしました');
}

function copy3(){
  //範囲を指定
  let range = document.createRange();
  let span = document.getElementById('english-script3');
  range.selectNodeContents(span);

  //指定した範囲を選択状態にする
  let selection = document.getSelection();
  selection.removeAllRanges();
  selection.addRange(range);

  //コピー
  document.execCommand('copy');
  alert('コピーしました');
}

function copy4(){
  //範囲を指定
  let range = document.createRange();
  let span = document.getElementById('english-script4');
  range.selectNodeContents(span);

  //指定した範囲を選択状態にする
  let selection = document.getSelection();
  selection.removeAllRanges();
  selection.addRange(range);

  //コピー
  document.execCommand('copy');
  alert('コピーしました');
}

// function copy5(){
//   //範囲を指定
//   let range = document.createRange();
//   let span = document.getElementById('example5');
//   range.selectNodeContents(span);

//   //指定した範囲を選択状態にする
//   let selection = document.getSelection();
//   selection.removeAllRanges();
//   selection.addRange(range);

//   //コピー
//   document.execCommand('copy');
//   alert('コピーしました');
// }
