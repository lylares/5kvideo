!
function(t, s, e, n) {
	function i(s, e) {
		this.opts = t.extend({}, i.DEFAULTS, e), this.$el = t(s), this.tabs = this.$el.find("." + this.opts.tabClass);
		var n = this.tabs;
		this.contents = this.$el.find("." + this.opts.contentClass);
		var o = (this.contents, this.opts.trigger),
			a = this;
		this.opts.invoke > 1 && this._tabSwitch(this.opts.invoke - 1), this.opts.autoPlay === !0 && (this.timerAuto && (clearInterval(this.timerAuto), this.timerAuto = null), this._autoPlay(), this.$el.hover(function(t) {
			clearInterval(a.timerAuto), a.timerAuto = null
		}, function(t) {
			t.preventDefault(), a._autoPlay()
		})), "click" === o && n.on(o, function(s) {
			s.preventDefault(), a.curIndex = n.index(t(this)), a._tabSwitch(a.curIndex)
		}), "mouseenter" === o && n.on(o, function(s) {
			a.curIndex = n.index(t(this)), a.timerDelay && (clearTimeout(a.timerDelay), a.timerDelay = null), a.timerDelay = setTimeout(function() {
				a._tabSwitch(a.curIndex), a.timerDelay = null
			}, 500)
		})
	}
	i.prototype = {
		constructor: i,
		autoIndex: 0,
		curIndex: 0,
		timerAuto: null,
		timerDelay: null,
		_tabSwitch: function(t) {
			"none" === this.opts.mode && (this.tabs.eq(t).addClass(this.opts.tabClassCur).siblings().removeClass(this.opts.tabClassCur), this.contents.eq(t).addClass(this.opts.contentClassCur).siblings().removeClass(this.opts.contentClassCur)), "fade" === this.opts.mode && (this.tabs.eq(t).addClass(this.opts.tabClassCur).siblings().removeClass(this.opts.tabClassCur), this.contents.eq(t).fadeIn().siblings().fadeOut()), this.opts.autoPlay === !0 && (this.autoIndex = t)
		},
		_autoPlay: function() {
			var t = this.tabs,
				s = this;
			this.timerAuto = setInterval(function() {
				s.autoIndex++, s.autoIndex >= t.length && (s.autoIndex = 0), s._tabSwitch(s.autoIndex)
			}, 2e3)
		}
	}, i.DEFAULTS = {
		tabClass: "tab",
		tabClassCur: "wdu-text-green",
		contentClass: "content",
		contentClassCur: "wdu-visible",
		trigger: "mouseenter",
		mode: "none",
		autoPlay: !0,
		invoke: 1
	}, t.fn.extend({
		tab: function(t) {
			return this.each(function() {
				new i(this, t)
			})
		}
	})
}(jQuery, window, document);
//# sourceMappingURL=tab.js.map