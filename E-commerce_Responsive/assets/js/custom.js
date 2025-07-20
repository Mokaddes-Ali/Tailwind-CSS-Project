$(document).ready(function () {
  const $underline = $('#underline');
  const $tabItems = $('.tab-item');
  const $tabContents = $('.tab-content');

  // দ্বিতীয় ট্যাব active করো (index 1)
  $tabItems.eq(1).addClass('active').css({ color: 'black', 'font-weight': '500' });
  $tabContents.hide().eq(1).show();
  setUnderline($tabItems.eq(1));

  // ট্যাব ক্লিক ইভেন্ট
  $tabItems.click(function () {
    $tabItems.removeClass('active').css({ color: 'rgba(0,0,0,0.6)', 'font-weight': '400' });
    $(this).addClass('active').css({ color: 'black', 'font-weight': '500' });

    const index = $(this).index();

    $tabContents.hide().eq(index).show();
    setUnderline($(this));
  });

  function setUnderline($tab) {
    const tabCenter = $tab.position().left + $tab.outerWidth()/2;
    const underlineLeft = tabCenter - 414/2;
    $underline.css({ left: underlineLeft + 'px', width: '414px' });
  }
});

