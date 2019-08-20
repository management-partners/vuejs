<template id='Skin'>
  <div class="right_content">
      <div class="well well-small dark">
          <div class="xs_skin_hide hidden-sm-up toggle-right"> <i class="fa fa-cog"></i></div>
          <h4 class="brown_txt">
              <span class="fa-stack fa-sm">
            <i class="fa fa-circle fa-stack-2x"></i>
            <i class="fa fa-paint-brush fa-stack-1x fa-inverse"></i>
          </span>
              Skins
          </h4>
          <br/>
          <div class="skinmulti_btn" onclick="javascript:loadjscssfile('blue_black_skin.css','css')">
              <div class="skin_blue skin_size"></div>
              <div class="skin_black skin_size"></div>
          </div>
          <div class="skinmulti_btn" onclick="javascript:loadjscssfile('green_black_skin.css','css')">
              <div class="skin_green skin_size"></div>
              <div class="skin_black skin_size"></div>
          </div>
          <div class="skinmulti_btn" onclick="javascript:loadjscssfile('orange_black_skin.css','css')">
              <div class="skin_orange skin_size"></div>
              <div class="skin_black skin_size"></div>
          </div>
          <div class="skinmulti_btn" onclick="javascript:loadjscssfile('red_black_skin.css','css')">
              <div class="skin_red skin_size"></div>
              <div class="skin_black skin_size"></div>
          </div>
          <div class="skinmulti_btn" onclick="javascript:loadjscssfile('mint_black_skin.css','css')">
              <div class="skin_mint skin_size"></div>
              <div class="skin_black skin_size"></div>
          </div>
          <div class="skinmulti_btn" onclick="javascript:loadjscssfile('brown_black_skin.css','css')">
              <div class="skin_brown skin_size"></div>
              <div class="skin_black skin_size"></div>
          </div>
          <div class="skinmulti_btn" onclick="javascript:loadjscssfile('black_skin.css','css')">
              <div class="skin_black skin_size"></div>
              <div class="skin_black skin_size"></div>
          </div>
          <div class="skin_btn skin_blue" onclick="javascript:loadjscssfile('blue_skin.css','css')"></div>
          <div class="skin_btn skin_green" onclick="javascript:loadjscssfile('green_skin.css','css')"></div>
          <div class="skin_btn skin_orange" onclick="javascript:loadjscssfile('orange_skin.css','css')"></div>
          <div class="skin_btn skin_red" onclick="javascript:loadjscssfile('red_skin.css','css')"></div>
          <div class="skin_btn skin_mint" onclick="javascript:loadjscssfile('mint_skin.css','css')"></div>
          <div class="skin_btn skin_brown" onclick="javascript:loadjscssfile('brown_skin.css','css')"></div>
          <div class="skin_btn skin_black" onclick="javascript:loadjscssfile('black_skin.css','css')"></div>
      </div>
  </div>
</template>

<script>
export default {
  name: 'Skin',
  template: '#Skin'
}
</script>
