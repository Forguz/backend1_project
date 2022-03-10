<script>
  import { getContext } from 'svelte';
  import { Router, Route } from 'svelte-routing';
  import Home from './Home.svelte';
  import VerticalMenu from './VerticalMenu.svelte';
  export let url = '';
</script>

<Router {url}>
  <Route path='/' component={VerticalMenu}/>
  <Route path='/home' component={Home}/>
</Router>