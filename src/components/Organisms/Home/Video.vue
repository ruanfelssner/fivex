<template>
    <div class="bgVideo">
            <video autoplay muted loop poster="@/assets/videos/home.jpg">
                <source src="@/assets/videos/home.mp4" type="video/mp4" />         
            </video>

        </div>  
</template>
<style lang="scss" scoped>
.bgVideo{
    position: relative;
    width: 100%;
    height:500px;
    overflow: hidden;
    video{
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        min-width: 100%;
        min-height: 100%;
        width: auto;
        height: auto;
        z-index: -100;
    }
}
@media screen and (max-width: 768px){
    .bgVideo{
        display:none;
    }
}
</style>