import { createRouter, createWebHistory } from 'vue-router';
import SetBalancePage from '../pages/SetBalancePage.vue';
import BalanceHistoryPage from '../pages/BalanceHistoryPage.vue';
import BalanceForm from '../components/BalanceForm.vue'
import IncrementHistory from '../components/IncrementHistory.vue'


const routes = [
  { path: '/', component: SetBalancePage },
  { path: '/history', component: BalanceHistoryPage },
];

const router = createRouter({
  history: createWebHistory(),
  routes,
});

export default router;
