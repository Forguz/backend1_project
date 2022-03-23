import Home from './Home.svelte';
import Products from './Products.svelte';
import Sign from './sign.svelte';

export const signInRoute = {
  page: Sign,
  route: '/sign'
}

export default [
  {
    page: Home,
    route: '/'
  },
  {
    page: Products,
    route: '/products'
  }
]