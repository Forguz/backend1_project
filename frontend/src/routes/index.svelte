<script>
  import { Router, Route } from 'svelte-routing';
  import routes from './routes';
  export let url = '';
</script>

<Router {url}>
  {#each routes as {route, page}}
    <Route path={route} component={page}/>
  {/each}
</Router>