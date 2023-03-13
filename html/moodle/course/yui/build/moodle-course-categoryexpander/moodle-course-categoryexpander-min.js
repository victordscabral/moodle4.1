YUI.add("moodle-course-categoryexpander",function(s,e){var a="collapse-all",t="disabled",i="loaded",l="notloaded",r="collapsed",c="with_children",o=".with_children",d=".with_children.loaded",p=".content",n=".category .info .categoryname",g=".categoryname",_=".category.with_children.collapsed",h=".category.with_children.loaded.collapsed",u=".category.with_children.loaded:not(.collapsed)",x=".collapseexpand",f=".coursebox",y=".coursebox .moreinfo",m=".info .moreinfo",v=".course_category_tree",b=".category",C=s.namespace("Moodle.course.categoryexpander"),w=M.cfg.wwwroot+"/course/category.ajax.php";C.init=function(){var e=s.one(s.config.doc);e.delegate("click",this.toggle_category_expansion,n,this),e.delegate("click",this.toggle_coursebox_expansion,y,this),e.delegate("click",this.collapse_expand_all,x,this),e.once("key",this.setup_keyboard_listeners,"tab",this)},C.setup_keyboard_listeners=function(){s.one(s.config.doc).all(n,y,x).setAttribute("tabindex","0"),s.one(s.config.doc).delegate("key",this.toggle_category_expansion,"enter",n,this),s.one(s.config.doc).delegate("key",this.toggle_coursebox_expansion,"enter",y,this),s.one(s.config.doc).delegate("key",this.collapse_expand_all,"enter",x,this)},C.expand_category=function(e){s.use("io-base","json-parse","moodle-core-notification","anim-node-plugin",function(){C.expand_category=C._expand_category,C.expand_category(e)})},C._expand_category=function(e){var n,o;e.hasClass(c)&&(e.hasClass(i)?this.run_expansion(e):(n=e.getData("categoryid"),o=e.getData("depth"),void 0!==n&&void 0!==o&&this._toggle_generic_expansion({parentnode:e,childnode:e.one(p),spinnerhandle:g,data:{categoryid:n,depth:o,showcourses:e.getData("showcourses"),type:0}})))},C.toggle_category_expansion=function(e){s.use("io-base","json-parse","moodle-core-notification","anim-node-plugin",function(){C.toggle_category_expansion=C._toggle_category_expansion,C.toggle_category_expansion(e)})},C.toggle_coursebox_expansion=function(e){s.use("io-base","json-parse","moodle-core-notification","anim-node-plugin",function(){C.toggle_coursebox_expansion=C._toggle_coursebox_expansion,C.toggle_coursebox_expansion(e)}),e.preventDefault()},C._toggle_coursebox_expansion=function(e){var n=e.target.ancestor(f,!0);e.preventDefault(),n.hasClass(i)?this.run_expansion(n):this._toggle_generic_expansion({parentnode:n,childnode:n.one(p),spinnerhandle:m,data:{courseid:n.getData("courseid"),type:1}})},C._toggle_category_expansion=function(e){var n,o;e.target.test("a")||e.target.test("img")||(e=e.target.ancestor(b,!0)).hasClass(c)&&(e.hasClass(i)?this.run_expansion(e):(n=e.getData("categoryid"),o=e.getData("depth"),void 0!==n&&void 0!==o&&this._toggle_generic_expansion({parentnode:e,childnode:e.one(p),spinnerhandle:g,data:{categoryid:n,depth:o,showcourses:e.getData("showcourses"),type:0}})))},C._toggle_generic_expansion=function(e){var n;e.spinnerhandle&&(n=M.util.add_spinner(s,e.parentnode.one(e.spinnerhandle)).show()),s.io(w,{method:"POST",context:this,on:{complete:this.process_results},data:e.data,arguments:{parentnode:e.parentnode,childnode:e.childnode,spinner:n}})},C.run_expansion=function(e){var n=e.one(p),o=this,a=e.ancestor(v);this.add_animation(n),e.hasClass(r)?(n.setStyle("height","0"),e.removeClass(r),e.setAttribute("aria-expanded","true"),n.fx.set("reverse",!1)):(n.fx.set("reverse",!0),n.fx.once("end",function(e,n){n.addClass(r),n.setAttribute("aria-expanded","false")},this,e)),n.fx.once("end",function(e,n){n.setStyles({height:"",opacity:""}),this.destroy(),o.update_collapsible_actions(a)},n.fx,n),n.fx.run()},C.collapse_expand_all=function(e){s.use("io-base","json-parse","moodle-core-notification","anim-node-plugin",function(){C.collapse_expand_all=C._collapse_expand_all,C.collapse_expand_all(e)}),e.preventDefault()},C._collapse_expand_all=function(e){e.preventDefault(),e.currentTarget.hasClass(t)||(e=e.currentTarget.ancestor(v))&&(e.one(x).hasClass(a)?this.collapse_all(e):this.expand_all(e),this.update_collapsible_actions(e))},C.expand_all=function(e){var n=[];e.all(_).each(function(e){e.ancestor(_)?(e.removeClass(r),e.all(o).removeClass(r)):n.push(e)},this),s.all(n).each(function(e){this.expand_category(e)},this)},C.collapse_all=function(e){var n=[];e.all(u).each(function(e){e.ancestor(u)?n.push(e):this.run_expansion(e)},this),s.all(n).each(function(e){e.addClass(r),e.all(d).addClass(r)},this)},C.update_collapsible_actions=function(e){var n=!1,o=e.one(x);o&&(e.all(u).each(function(e){return!e.ancestor(h)&&(n=!0)}),(n?o.setHTML(M.util.get_string("collapseall","moodle")).addClass(a):o.setHTML(M.util.get_string("expandall","moodle")).removeClass(a)).removeClass(t))},C.process_results=function(e,n,o){var a;try{if((a=s.JSON.parse(n.responseText)).error)return new M.core.ajaxException(a)}catch(t){return new M.core.exception(t)}n=s.Node.create(a),o.childnode.appendChild(n),o.parentnode.addClass(i).removeClass(l),this.run_expansion(o.parentnode),o.spinner&&o.spinner.hide().destroy()},C.add_animation=function(e){return"undefined"==typeof e.fx&&e.plug(s.Plugin.NodeFX,{from:{height:0,opacity:0},to:{height:function(e){return e.get("scrollHeight")},opacity:1},duration:.2}),e}},"@VERSION@",{requires:["node","event-key"]});