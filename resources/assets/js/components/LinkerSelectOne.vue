<template>  
    <div>
        <selectable-item  
            v-for="(selectable, index) in this.linker.selectables"
            :key="index" :value="index" :description="selectable.data.description" :text="selectable.data.text"
            :is-selected="selected.indexOf(index) !== -1"
            @selected="onSelect" @unselected="onUnselect">           
        </selectable-item>
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
/*            $(this.$el).slick({
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
            */
        },
        methods: {
         checkboxToggle(value) {
               console.log("yes");
               console.log(value);
               console.log(this.name);
               console.log(this.checked);
            },
            check() {
               console.log("yes");
               console.log(this.name);
            },
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