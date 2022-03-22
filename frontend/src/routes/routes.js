import Home from './Home.svelte';
import Products from './Products.svelte';
import SignIn from './SignIn.svelte';

export const signInRoute = {
  page: SignIn,
  route: '/sign-in'
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