<link rel="import" href="../core-scaffold/core-scaffold.html">
<link rel="import" href="../core-header-panel/core-header-panel.html">
<link rel="import" href="../core-menu/core-menu.html">
<link rel="import" href="../core-item/core-item.html">
<link rel="import" href="../core-icon-button/core-icon-button.html">
<link rel="import" href="../core-toolbar/core-toolbar.html">
<link rel="import" href="../core-menu/core-submenu.html">
<link rel="import" href="../core-animated-pages/core-animated-pages.html">
<link rel="import" href="../core-animated-pages/transitions/hero-transition.html">
<link rel="import" href="../core-animated-pages/transitions/cross-fade.html">
<link rel="import" href="../core-animated-pages/transitions/slide-down.html">
<link rel="import" href="../core-animated-pages/transitions/slide-up.html">
<link rel="import" href="../core-animated-pages/transitions/tile-cascade.html">

<polymer-element name="porthos-proyecto">

  <template>
    <style>    
      :host {
        position: absolute;
        width: 100%;
        height: 100%;
        box-sizing: border-box;
      }
      #core_scaffold {
        position: absolute;
        top: 0px;
        right: 0px;
        bottom: 0px;
        left: 0px;
        width: 100%;
        height: 100%;
      }
      #core_header_panel {
        background-color: rgb(255, 255, 255);
      }
      #core_toolbar {
        background-color: rgb(79, 125, 201);
        color: rgb(255, 255, 255);
      }
      #core_menu {
        font-size: 16px;
      }
      #core_animated_pages {
        width: 100%;
        height: 100%;
        overflow: hidden;
        background-color: rgb(255, 255, 255);
        position: absolute;
        top: 0px;
        left: 0px;
      }
      #section {
        padding: 40px;
        background-color: rgb(234, 249, 228);
      }
      #core_card {
        width: 80%;
        height: 300px;
        background-color: rgb(255, 255, 255);
        border-top-left-radius: 2px;
        border-top-right-radius: 2px;
        border-bottom-right-radius: 2px;
        border-bottom-left-radius: 2px;
        box-shadow: rgba(0, 0, 0, 0.0980392) 0px 2px 4px, rgba(0, 0, 0, 0.0980392) 0px 0px 3px;
        position: absolute;
        top: 50px;
      }
      #core_toolbar1 {
        right: 0px;
        background-color: rgb(79, 125, 201);
        color: rgb(255, 255, 255);
        fill: #ffffff;
      }
    </style>
    <core-scaffold responsivewidth="9999px" id="core_scaffold">
      <core-header-panel mode="seamed" id="core_header_panel" navigation flex>
        <core-toolbar id="core_toolbar"></core-toolbar>
        <core-menu selected="Item1" valueattr="label" selectedindex="0" id="core_menu" theme="core-light-theme">
          <core-item label="Item1" icon="settings" size="24" id="core_item" on-tap="{{ page1 }}" horizontal center layout active></core-item>
          <core-item label="Item2" icon="settings" size="24" id="core_item1" on-tap="{{ page2 }}" horizontal center layout></core-item>
        </core-menu>
      </core-header-panel>
      <div id="div" tool>Mitlley Porthos</div>
      <core-animated-pages transitions="hero-transition cross-fade-delayed" selectedindex="0" notap id="core_animated_pages">
        <section id="section" active slide-up horizontal layout start-justified>
          <core-card id="core_card" layout vertical>
            <core-toolbar id="core_toolbar1">
              <div id="div1" flex>Toolbar</div>
            </core-toolbar>
          </core-card>
        </section>
        <section id="section1">
      </section>
        <section id="section2">
      </section>
      </core-animated-pages>
    </core-scaffold>
  </template>

  <script>

    Polymer('portos-proyecto', {
      search: function () {
        this.$.paper_fab.icon = 'check';
        
      },
      page1: function () {
        this.$.core_animated_pages.selected = 0;
        this.$.core_scaffold.closeDrawer();
      },
      page2: function () {
        this.$.core_animated_pages.selected = 1;
        this.$.core_scaffold.closeDrawer();
      }
    });

  </script>

</polymer-element>