<template>
    
    <div>
        <selectable-item
            v-for="(selectable, index) in this.linker.selectables"
            :key="index" :value="index"  :image="selectable.data.image_url" :description="selectable.data.description" :text="selectable.data.text"
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
            });*/
        },
        methods: {
            onSelect(value) {
                if(this.selected.length >= this.linker.maximum) return;
                
                this.selected.push(value);

                this.$emit('input', this.selected);

                if(this.selected.length >= this.linker.minimum) this.$emit('can-next');
            },
            onUnselect(value) {
                let index = this.selected.indexOf(value);
                if (index !== -1) this.selected.splice(index, 1);

                this.$emit('input', this.selected);
                if(this.selected.length < this.linker.minimum) this.$emit('cannot-next');
            }
        }
    }
</script>

<style scoped>

</style>