<template>
    <div @click="toggle" class="card">
        <div :class="this.selected ? 'shake bg-success text-white' : ''" style="outline: none;">
            <slot></slot>
        </div>
    </div>
</template>

<script>
    export default {
        props: {
            value: {
                required: true
            },
            isSelected: {
                type: Boolean,
                required: true
            }
        },
        watch: {
            isSelected(isSelected) {
                this.selected = isSelected;
            }
        },
        data() {
            return {
                selected: this.isSelected
            }
        },
        methods: {
            toggle() {
                if(this.selected) {
                    this.$emit('unselected', this.value);
                } else {
                    this.$emit('selected', this.value);
                }
            }
        }
    }
</script>

<style scoped>
    @keyframes shake {
        2% {
            transform: translate(-0.5px, 1.5px) rotate(1.5deg); }
        4% {
            transform: translate(1.5px, -0.5px) rotate(0.5deg); }
        6% {
            transform: translate(1.5px, -1.5px) rotate(-0.5deg); }
        8% {
            transform: translate(2.5px, 2.5px) rotate(-0.5deg); }
        10% {
            transform: translate(-1.5px, 1.5px) rotate(0.5deg); }
        12% {
            transform: translate(-0.5px, -0.5px) rotate(1.5deg); }
        14% {
            transform: translate(1.5px, 0.5px) rotate(1.5deg); }
        16% {
            transform: translate(1.5px, -1.5px) rotate(-0.5deg); }
        18% {
            transform: translate(1.5px, 2.5px) rotate(1.5deg); }
        20% {
            transform: translate(-1.5px, 1.5px) rotate(-0.5deg); }
        22% {
            transform: translate(2.5px, 1.5px) rotate(-0.5deg); }
        24% {
            transform: translate(-0.5px, 2.5px) rotate(1.5deg); }
        26% {
            transform: translate(-0.5px, 0.5px) rotate(1.5deg); }
        28% {
            transform: translate(-0.5px, -0.5px) rotate(1.5deg); }
        30% {
            transform: translate(2.5px, 2.5px) rotate(1.5deg); }
        32% {
            transform: translate(0.5px, 0.5px) rotate(1.5deg); }
        34% {
            transform: translate(-1.5px, 1.5px) rotate(0.5deg); }
        36% {
            transform: translate(1.5px, -1.5px) rotate(-0.5deg); }
        38% {
            transform: translate(2.5px, -1.5px) rotate(1.5deg); }
        40% {
            transform: translate(-1.5px, 1.5px) rotate(-0.5deg); }
        42% {
            transform: translate(2.5px, 0.5px) rotate(1.5deg); }
        44% {
            transform: translate(1.5px, 0.5px) rotate(-0.5deg); }
        46% {
            transform: translate(-0.5px, -1.5px) rotate(1.5deg); }
        48% {
            transform: translate(-1.5px, -0.5px) rotate(1.5deg); }
        50% {
            transform: translate(0.5px, 1.5px) rotate(0.5deg); }
        52% {
            transform: translate(-0.5px, -0.5px) rotate(-0.5deg); }
        54% {
            transform: translate(-1.5px, -0.5px) rotate(-0.5deg); }
        56% {
            transform: translate(-0.5px, 0.5px) rotate(1.5deg); }
        58% {
            transform: translate(-0.5px, -0.5px) rotate(0.5deg); }
        60% {
            transform: translate(1.5px, 0.5px) rotate(-0.5deg); }
        62% {
            transform: translate(-1.5px, 1.5px) rotate(0.5deg); }
        64% {
            transform: translate(1.5px, -0.5px) rotate(-0.5deg); }
        66% {
            transform: translate(2.5px, -1.5px) rotate(1.5deg); }
        68% {
            transform: translate(2.5px, 0.5px) rotate(-0.5deg); }
        70% {
            transform: translate(-0.5px, -1.5px) rotate(-0.5deg); }
        72% {
            transform: translate(0.5px, 2.5px) rotate(-0.5deg); }
        74% {
            transform: translate(-0.5px, -0.5px) rotate(0.5deg); }
        76% {
            transform: translate(2.5px, 1.5px) rotate(0.5deg); }
        78% {
            transform: translate(-1.5px, 2.5px) rotate(1.5deg); }
        80% {
            transform: translate(-0.5px, -0.5px) rotate(-0.5deg); }
        82% {
            transform: translate(-0.5px, -1.5px) rotate(-0.5deg); }
        84% {
            transform: translate(2.5px, 2.5px) rotate(-0.5deg); }
        86% {
            transform: translate(-0.5px, -0.5px) rotate(0.5deg); }
        88% {
            transform: translate(0.5px, -0.5px) rotate(1.5deg); }
        90% {
            transform: translate(-0.5px, 1.5px) rotate(-0.5deg); }
        92% {
            transform: translate(-0.5px, -1.5px) rotate(0.5deg); }
        94% {
            transform: translate(1.5px, 0.5px) rotate(1.5deg); }
        96% {
            transform: translate(-0.5px, 0.5px) rotate(-0.5deg); }
        98% {
            transform: translate(0.5px, 1.5px) rotate(-0.5deg); }
        0%, 100% {
            transform: translate(0, 0) rotate(0); }
    }

    .shake {
        animation-name: shake;
        animation-duration: 200ms;
        animation-timing-function: ease-in-out;
        animation-iteration-count: 1;
    }

    div {
        cursor: pointer;
    }

    .selected-signaling-icon {
        position: absolute;
        top: 0.15em;
        left: 0.15em;
    }
</style>