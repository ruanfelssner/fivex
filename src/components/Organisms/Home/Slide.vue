<template>
    <Swiper
            :modules="[SwiperAutoplay, SwiperEffectCreative]"
            :slides-per-view="1"
            :loop="true"
            :effect="'creative'"
            :autoplay="{
            delay: 8000,
            disableOnInteraction: true,
            }"
            :creative-effect="{
            prev: {
                shadow: false,
                translate: ['-20%', 0, -1],
            },
            next: {
                translate: ['100%', 0, 0],
            },
            }"
        >
            <SwiperSlide>
                <img src="@/assets/imgs/slide-01.jpg" alt="" />
            </SwiperSlide>
            <SwiperSlide>
                <img src="@/assets/imgs/slide-02.jpg" alt="" />
            </SwiperSlide>
            <SwiperSlide>
                <img src="@/assets/imgs/slide-03.jpg" alt="" />
            </SwiperSlide>
            <SwiperSlide>
                <img src="@/assets/imgs/slide-04.jpg" alt="" />
            </SwiperSlide>
        </Swiper>
</template>