import Vue from 'vue';
import Vuex from 'vuex';
import toastr from 'toastr'
Vue.use(Vuex);

export default new Vuex.Store({
    state: {
        cartProduct: localStorage.getItem('cart') ? JSON.parse(localStorage.getItem('cart')) : [],
        currentProduct: {},
        showModal: false,
        showPopupCart: false,
    },

    getters: {
        getNotebooks: state => state.notebooks,
        getSmartphones: state => state.smartphones,
        getAllProducts: state => state.notebooks.concat(state.smartphones),
        getProductsInCart: state => state.cartProduct.reverse(),
        getCurrentProduct: state => state.currentProduct,
        getShowModal: state => state.showModal,
        getPopupCart: state => state.showPopupCart,
    },

    mutations: {
        ADD_PRODUCT: (state, item) => {
            state.cartProduct.push({
                size: item.size,
                color: item.color,
                name: item.name,
                price: item.price,
                img: item.img,
                quantity: item.quantity,
            });
            localStorage.setItem('cart',JSON.stringify(state.cartProduct));
            toastr.success('se agrego a tu carrito');
        },
        REMOVE_PRODUCT: (state, index) => {
            state.cartProducts.splice(index, 1);
        },
        CURRENT_PRODUCT: (state, product) => {
            state.currentProduct = product;
        },
        SHOW_MODAL: (state) => {
            state.showModal = !state.showModal;
        },
        SHOW_POPUP_CART: (state) => {
            state.showPopupCart = !state.showPopupCart;
        },
    },

    actions: {
        addProducts: (context, product) => {
            context.commit('ADD_PRODUCT', product);
        },
        removeProduct: (context, index) => {
            context.commit('REMOVE_PRODUCT', index);
        },
        currentProduct: (context, product) => {
            context.commit('CURRENT_PRODUCT', product);
        },
        showOrHiddenModal: (context) => {
            context.commit('SHOW_MODAL');
        },
        showOrHiddenPopupCart: (context) => {
            context.commit('SHOW_POPUP_CART');
        },
    },
});
