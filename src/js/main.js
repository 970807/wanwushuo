import $ from 'jquery'
import BScroll from 'better-scroll'
let info = {
  hot: null, // 热门推荐
  speaker: null, // 智能音箱
  uav: null, // 无人机
  vr: null, // VR/AR
  earphone: null, // 智能耳机
  router: null // 智能路由器
}
$(function () {
  // ajax
  $.getJSON('http://wanwushuo.ggh0807.cn/php', function (data) {
    // 行业快讯
    let target = $('.news-content li:last-child')
    let $els = $(new DocumentFragment())
    $.each(data.news, function (index, item) {
      let $li = $('.news-content li').eq(0).clone(true)
      $li.find('.time').text(item.time)
      $li.find('p').text(item.text)
      $li.find('a').attr('href', item.link)
      $els.append($li)
    })
    target.before($els)
    $('.news-content li').eq(0).remove()
    // info
    info.hot = data.hot
    info.speaker = data.speaker
    info.uav = data.uav
    info.vr = data.vr
    info.earphone = data.earphone
    info.router = data.router
    // 热门推荐
    target = $('.info')
    updateNavBar(info.hot)
  })
  // navbar
  $('#nav li')
    .not('.head')
    .click(function () {
      if (!$(this).hasClass('active')) {
        $(this).addClass('active')
        $(this).siblings().not('.head').removeClass('active')
        let data = Object.values(info)[$(this).index() - 1]
        updateNavBar(data)
      }
    })

  function updateNavBar(data) {
    let target = $('.info')
    let tip = target.find('.tip')
    let currentLiLength = target.find('li').not('.tip').length
    if (currentLiLength < data.length) {
      for (let i = 0; i < data.length - currentLiLength; i++) {
        let $li = $(`
          <li class="clearfix">
            <a class="img" href="javascript:;" target="_blank">
              <div class="category">category</div>
              <img>
            </a>
            <div class="text">
              <a class="title" href="javascript:;" target="_blank">
                title
              </a>
              <span class="time">
                time
              </span>
              <div class="tag">
                <a href="javascript:;">tag</a>
              </div>
            </div>
          </li>
        `)
        tip.before($li)
      }
    } else if (currentLiLength > data.length) {
      for (let i = 0; i < currentLiLength - data.length; i++) {
        target
          .find('li')
          .not('.tip')
          .eq(currentLiLength - i - 1)
          .remove()
      }
    }
    $.each(data, function (index, item) {
      let $li = target.find('li').eq(index)
      $li.find('.category').text(item.category)
      $li.find('a.img').attr('href', item.link)
      $li.find('.img img').attr('src', item.img)
      $li.find('.title').text(item.title)
      $li.find('.title').attr('href', item.link)
      $li.find('.time').text(item.time)
      let $tagItem = $li.find('.tag a').eq(0).clone(true)
      $li.find('.tag').empty()
      $.each(item.tags, function (index, item) {
        let $tag = $tagItem.clone(true)
        $tag.text(item)
        $li.find('.tag').append($tag)
      })
      $tagItem = null
    })
  }
  // better-scroll
  let bscrollX = new BScroll('.scroll-x', {
    scrollX: true,
    click: true
  })
  let bscrollY = new BScroll('.scroll-y', {
    scrollY: true,
    mouseWheel: true,
    click: true
  })
  // 搜索框hover
  $('.search-input').hover(
    function () {
      $(this).children('input').css('border', '1px solid #3092E2')
      $(this).children('span').css('color', '#3092E2')
    },
    function () {
      $(this).children('input').removeAttr('style')
      $(this).children('span').removeAttr('style')
    }
  )

  // header下拉菜单hover
  let screenWidth
  let ToggleFn
  screenResize()
  $(window).resize(screenResize)
  $('header .dropdown').hover(
    function () {
      let otherEl = $('header .dropdown').not(this)
      ToggleFn(otherEl, false, 0)
      ToggleFn($(this), true)
    },
    function () {
      ToggleFn($(this), false)
    }
  )

  // 搜索框
  $('header .search-input span').click(function () {
    let searchContent = $(this).siblings('input').val()
    searchContent = encodeURIComponent(encodeURIComponent(searchContent))
    window.open(
      `https://www.qianjia.com/Search.html?type=1&value=${searchContent}`
    )
  })
  $('header .search-input input').keydown(function (event) {
    if (event.keyCode === 13) {
      $(this).next().trigger('click')
    }
  })

  $('footer dt').click(function () {
    if ($(window).width() <= 750) {
      $(this).nextAll().toggle()
    }
  })

  function toggleMenu() {
    let timer
    return function (target, isShow, timeout = 600) {
      target = target.children('ul')
      if (isShow) {
        clearTimeout(timer)
        target.addClass('show')
      } else {
        timer && clearInterval(timer)
        if (timeout === 0) {
          target.removeClass('show')
        } else {
          timer = setTimeout(() => {
            target.removeClass('show')
          }, timeout)
        }
      }
    }
  }
  function screenResize() {
    screenWidth = $(window).width()
    if (screenWidth > 750) {
      ToggleFn = toggleMenu()
      $('footer dd').show()
    } else {
      ToggleFn = null
      $('footer dd').hide()
    }
    bscrollX && bscrollX.refresh()
    bscrollY && bscrollY.refresh()
  }
})
