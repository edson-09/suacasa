import { swipe } from "/assets/js/swipeBanner.js";

async function loadHomeData() {
    var bannerHome = document.querySelector("._bannerHome");
    // var recent = document.querySelector("._recent");
    // var categoryCulture = document.querySelector("._category_culture");
    // var categoryBusiness = document.querySelector("._category_business");
    // var categoryLifestyle = document.querySelector("._category_lifestyle");
    
    // const responses = await Promise.all([
    //     await fetch("banner/home", { method: "get" }),
    //     await fetch("trendings", { method: "get" }),
    //     await fetch("recent", { method: "get" }),
    //     await fetch("category/culture", { method: "get" }),
    //     await fetch("category/business", { method: "get" }),
    //     await fetch("category/lifestyle", { method: "get" }),
    // ]);
    
    // const bannerHtml = await responses[0].text();
    // const trendingHtml = await responses[1].text();
    // const recentHtml = await responses[2].text();
    // const categoryCultureHtml = await responses[3].text();
    // const categoryBusinessHtml = await responses[4].text();
    // const categoryLifestyleHtml = await responses[5].text();
    
    // bannerHome.innerHTML = bannerHtml;
    // recent.innerHTML = recentHtml;
    
    // // Carregando o trending apos o carregamento do recent (o trending esta dentro do recent)
    // var trending = document.querySelector("._trending");
    // trending.innerHTML = trendingHtml;
    // categoryCulture.innerHTML = categoryCultureHtml;
    // categoryBusiness.innerHTML = categoryBusinessHtml;
    // categoryLifestyle.innerHTML = categoryLifestyleHtml;
    
    // !! Load BannerHome
    const dataBanner = await fetch('/banner/home', {method: 'get'});
    const bannerHtml = await dataBanner.text();
    bannerHome.innerHTML = bannerHtml;
    
    swipe(".sliderFeaturedPosts");
    
    // // !! Load Recent
    // const dataRecent = await fetch('/recent', {method: 'get'});
    // const recentHtml = await dataRecent.text();
    // recent.innerHTML = recentHtml;
    
    // // !! Load Trending
    // const dataTrending = await fetch('/trendings', {method: 'get'});
    // const trendingHtml = await dataTrending.text();
    // var trending = document.querySelector("._trending");
    // trending.innerHTML = trendingHtml;
    
    // // !! Load Category Culture
    // const dataCategoryCulture = await fetch('/category/culture', {method: 'get'});
    // const dataCategoryCultureHtml = await dataCategoryCulture.text();
    // categoryCulture.innerHTML = dataCategoryCultureHtml;
    
    // // !! Load Category Business
    // const dataCategoryBusiness = await fetch('/category/business', {method: 'get'});
    // const dataCategoryBusinessHtml = await dataCategoryBusiness.text();
    // categoryBusiness.innerHTML = dataCategoryBusinessHtml;
    
    // // !! Load Category Lifestyle
    // const dataCategoryLifestyle = await fetch('/category/lifestyle', {method: 'get'});
    // const dataCategoryLifestyleHtml = await dataCategoryLifestyle.text();
    // categoryLifestyle.innerHTML = dataCategoryLifestyleHtml;
    
}

loadHomeData();
