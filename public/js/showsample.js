$(function() {
  var $tabButtonItem = $('#tab-button li'),
      $tabSelect = $('#tab-select'),
      $tabContents = $('.tab-contents'),
      activeClass = 'is-active';

  $tabButtonItem.first().addClass(activeClass);
  $tabContents.not(':first').hide();

  $tabButtonItem.find('a').on('click', function(e) {
    var target = $(this).attr('href');

    $tabButtonItem.removeClass(activeClass);
    $(this).parent().addClass(activeClass);
    $tabSelect.val(target);
    $tabContents.hide();
    $(target).show();
    e.preventDefault();
  });

  $tabSelect.on('change', function() {
    var target = $(this).val(),
        targetSelectNum = $(this).prop('selectedIndex');

    $tabButtonItem.removeClass(activeClass);
    $tabButtonItem.eq(targetSelectNum).addClass(activeClass);
    $tabContents.hide();
    $(target).show();
  });
});


function copy1(){
  //範囲を指定
  let range = document.createRange();
  let span = document.getElementById('example1');
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
  let span = document.getElementById('example2');
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
  let span = document.getElementById('example3');
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
  let span = document.getElementById('example4');
  range.selectNodeContents(span);

  //指定した範囲を選択状態にする
  let selection = document.getSelection();
  selection.removeAllRanges();
  selection.addRange(range);

  //コピー
  document.execCommand('copy');
  alert('コピーしました');
}

function copy5(){
  //範囲を指定
  let range = document.createRange();
  let span = document.getElementById('example5');
  range.selectNodeContents(span);

  //指定した範囲を選択状態にする
  let selection = document.getSelection();
  selection.removeAllRanges();
  selection.addRange(range);

  //コピー
  document.execCommand('copy');
  alert('コピーしました');
}

