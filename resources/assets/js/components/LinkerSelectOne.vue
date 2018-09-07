<template>
    
    <div class="horizontal-scroll card-deck">
        <selectable-card 
            class="text-center" 
            v-for="(selectable, index) in this.linker.selectables"
            :key="index" :value="index"
            :is-selected="selected.indexOf(index) !== -1"
            @selected="onSelect" @unselected="onUnselect">
            <img class="card-img-top" :src="selectable.data.image_url" v-if="selectable.data.image_url">
            <div class="card-body d-flex align-items-center">
                <p class="m-0">{{ selectable.data.text }}</p>
            </div>
        </selectable-card>
    </div>

</template>

<script>
    export default {
        props: {
            linker: {
                type: Object,
                required: true
            },
            value: {
                required: true
            }
        },
        data() {
            return {
                selected: this.value || []
            }
        },
        mounted() {
            $(this.$el).slick({
                slidesToShow: 3,
                slidesToScroll: 1,
                infinite: false,
                centerMode: true,
                // centerPadding: '30px',
                autoplay: true,
                autoplaySpeed: 2000,
                arrows: false,
                prevArrow: '<i class="fas fa-chevron-left slick-prev"></i>',
                nextArrow: '<i class="fas fa-chevron-right slick-next"></i>',
                responsive: [
                {
                    breakpoint: 769,
                    settings: {
                        // arrows: true,
                        slidesToShow: 3,
                        slidesToScroll: 1
                    }
                }
                ,
                {
                    breakpoint: 577,
                    settings: {
                        // arrows: true,
                        slidesToShow: 1,
                        slidesToScroll: 1
                    }
                }
                ]
            });
        },
        methods: {
            onSelect(value) {
                this.$set(this.selected, 0, value);

                this.$emit('input', this.selected);
                this.$emit('can-next');
            },
            onUnselect(value) {
                let index = this.selected.indexOf(value);
                if (index !== -1) this.selected.splice(index, 1);

                this.$emit('input', this.selected);
                this.$emit('cannot-next');
            }
        }
    }
</script>

<style>
@keyframes swipable {
    from,
    to {
        transform: translate3d(0, 0, 0);
    }
    10%,
    30%,
    50%,
    70%,
    90% {
        transform: translate3d(-40px, 0, 0);
    }
    20%,
    40%,
    60%,
    80% {
        transform: translate3d(40px, 0, 0);
    }
}

.swipable {
    animation-name: swipable;
    animation-duration: 1000ms;
    animation-timing-function: ease-in-out;
    animation-iteration-count: 1;
}
</style>