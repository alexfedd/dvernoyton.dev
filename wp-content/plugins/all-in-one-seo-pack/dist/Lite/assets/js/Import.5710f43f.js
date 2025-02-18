import{u as P,p as B}from"./index.66ecdd60.js";import{j as m}from"./helpers.53868b98.js";import{u as L}from"./Wizard.de3da4e0.js";import{B as N}from"./HighlightToggle.3168783f.js";import{G as E,a as G}from"./Row.df38a5f6.js";import{W as H,a as U,b as O}from"./Header.a8795c60.js";import{W as R}from"./CloseAndExit.4e22fa87.js";import{_ as T}from"./Steps.8cda553b.js";import"./translations.d159963e.js";import{_ as F}from"./_plugin-vue_export-helper.eefbdd86.js";import{u as j}from"./SetupWizardStore.3e549b6e.js";import{_ as h,s as J}from"./default-i18n.20001971.js";import{c as g,C as t,l as s,v as r,o as u,a as p,x as l,t as c,F as M,J as q,k as K,G as Q,b as y}from"./runtime-dom.esm-bundler.5c3c7d72.js";import"./addons.a944c7fa.js";import"./upperFirst.2cd99bdd.js";import"./_stringToArray.f9ddb970.js";import"./toString.f0787db8.js";import"./Checkbox.6db0b9ed.js";import"./Checkmark.e40641dd.js";import"./Radio.7b47f2fa.js";import"./Logo.6c9d2b19.js";import"./Index.412f67cf.js";import"./Caret.a21d4ca8.js";const k=""+window.__aioseoDynamicImportPreload__("images/yoast-logo-small.5db5799f.png"),X=""+window.__aioseoDynamicImportPreload__("images/rank-math-seo-logo-small.98027023.png"),Y=""+window.__aioseoDynamicImportPreload__("svg/seopress-free-logo-small.3b7febd7.svg"),Z=""+window.__aioseoDynamicImportPreload__("svg/seopress-pro-logo-small.ea7afcb5.svg"),f="all-in-one-seo-pack",$={setup(){const{strings:e}=L({stage:"import"});return{composableStrings:e,rootStore:P(),setupWizardStore:j()}},components:{BaseHighlightToggle:N,GridColumn:E,GridRow:G,WizardBody:H,WizardCloseAndExit:R,WizardContainer:U,WizardHeader:O,WizardSteps:T},data(){return{loading:!1,strings:B(this.composableStrings,{importData:h("Import data from your current plugins",f),weHaveDetected:J(h("We have detected other SEO plugins installed on your website. Select which plugins you would like to import data to %1$s.",f),"AIOSEO"),importDataAndContinue:h("Import Data and Continue",f)}),pluginImages:{"yoast-seo":m(k),"yoast-seo-premium":m(k),"rank-math-seo":m(X),seopress:m(Y),"seopress-pro":m(Z)},selected:[]}},watch:{selected(e){this.setupWizardStore.importers=e.map(a=>a.slug)}},computed:{getPlugins(){return this.rootStore.aioseo.importers.filter(e=>e.canImport)}},methods:{updateValue(e,a){if(e){this.selected.push(a);return}const d=this.selected.findIndex(_=>_.value===a.value);d!==-1&&this.selected.splice(d,1)},getValue(e){return this.selected.includes(e)},isActive(e){return this.selected.findIndex(d=>d.slug===e.slug)!==-1},saveAndContinue(){this.loading=!0,this.setupWizardStore.saveWizard("importers").then(()=>{this.$router.push(this.setupWizardStore.getNextLink)})},skipStep(){this.setupWizardStore.saveWizard(),this.$router.push(this.setupWizardStore.getNextLink)}}},ee={class:"aioseo-wizard-import"},te={class:"header"},oe={class:"description"},se={class:"plugins"},re=["alt","src"],ne={key:1,class:"icon dashicons dashicons-admin-plugins"},ae={class:"go-back"},ie=p("div",{class:"spacer"},null,-1);function le(e,a,d,_,n,i){const v=r("wizard-header"),S=r("wizard-steps"),b=r("base-highlight-toggle"),x=r("grid-column"),I=r("grid-row"),z=r("router-link"),w=r("base-button"),W=r("wizard-body"),C=r("wizard-close-and-exit"),A=r("wizard-container");return u(),g("div",ee,[t(v),t(A,null,{default:s(()=>[t(W,null,{footer:s(()=>[p("div",ae,[t(z,{to:_.setupWizardStore.getPrevLink,class:"no-underline"},{default:s(()=>[l("←")]),_:1},8,["to"]),l("   "),t(z,{to:_.setupWizardStore.getPrevLink},{default:s(()=>[l(c(n.strings.goBack),1)]),_:1},8,["to"])]),ie,t(w,{type:"gray",onClick:i.skipStep},{default:s(()=>[l(c(n.strings.skipThisStep),1)]),_:1},8,["onClick"]),t(w,{type:"blue",loading:n.loading,onClick:i.saveAndContinue},{default:s(()=>[l(c(n.strings.importDataAndContinue)+" →",1)]),_:1},8,["loading","onClick"])]),default:s(()=>[t(S),p("div",te,c(n.strings.importData),1),p("div",oe,c(n.strings.weHaveDetected),1),p("div",se,[t(I,null,{default:s(()=>[(u(!0),g(M,null,q(i.getPlugins,(o,D)=>(u(),K(x,{key:D,md:"6"},{default:s(()=>[t(b,{type:"checkbox",size:"medium",round:"",active:i.isActive(o),name:o.name,modelValue:i.getValue(o),"onUpdate:modelValue":V=>i.updateValue(V,o)},{default:s(()=>[n.pluginImages[o.slug]?(u(),g("img",{key:0,alt:o.name+" Plugin Icon",src:n.pluginImages[o.slug],class:Q(["icon",o.slug])},null,10,re)):y("",!0),n.pluginImages[o.slug]?y("",!0):(u(),g("span",ne)),l(" "+c(o.name),1)]),_:2},1032,["active","name","modelValue","onUpdate:modelValue"])]),_:2},1024))),128))]),_:1})])]),_:1}),t(C)]),_:1})])}const Pe=F($,[["render",le]]);export{Pe as default};
