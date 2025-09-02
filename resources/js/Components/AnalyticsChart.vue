<template>
  <div class="bg-card border border-border rounded-lg">
    <div class="p-6 border-b border-border">
      <h3 class="text-lg font-semibold">Monthly Analytics</h3>
    </div>
    <div class="p-6">
      <div class="h-80">
        <canvas ref="chartCanvas" class="w-full h-full"></canvas>
      </div>
    </div>
  </div>
</template>

<script setup lang="ts">
import { ref, onMounted } from 'vue';

const chartCanvas = ref<HTMLCanvasElement>();

const data = [
  { name: 'Jan', plays: 4000, listeners: 2400 },
  { name: 'Feb', plays: 3000, listeners: 1398 },
  { name: 'Mar', plays: 2000, listeners: 9800 },
  { name: 'Apr', plays: 2780, listeners: 3908 },
  { name: 'May', plays: 1890, listeners: 4800 },
  { name: 'Jun', plays: 2390, listeners: 3800 },
  { name: 'Jul', plays: 3490, listeners: 4300 },
];

onMounted(() => {
  if (!chartCanvas.value) return;

  const canvas = chartCanvas.value;
  const ctx = canvas.getContext('2d');
  if (!ctx) return;

  // Set canvas size
  const rect = canvas.getBoundingClientRect();
  canvas.width = rect.width * window.devicePixelRatio;
  canvas.height = rect.height * window.devicePixelRatio;
  ctx.scale(window.devicePixelRatio, window.devicePixelRatio);

  // Chart dimensions
  const padding = 40;
  const chartWidth = rect.width - padding * 2;
  const chartHeight = rect.height - padding * 2;

  // Find max values
  const maxPlays = Math.max(...data.map(d => d.plays));
  const maxListeners = Math.max(...data.map(d => d.listeners));
  const maxValue = Math.max(maxPlays, maxListeners);

  // Draw grid
  ctx.strokeStyle = '#e5e7eb';
  ctx.lineWidth = 1;

  for (let i = 0; i <= 5; i++) {
    const y = padding + (chartHeight / 5) * i;
    ctx.beginPath();
    ctx.moveTo(padding, y);
    ctx.lineTo(padding + chartWidth, y);
    ctx.stroke();
  }

  // Draw plays line
  ctx.strokeStyle = '#3b82f6';
  ctx.lineWidth = 2;
  ctx.beginPath();

  data.forEach((point, index) => {
    const x = padding + (chartWidth / (data.length - 1)) * index;
    const y = padding + chartHeight - (point.plays / maxValue) * chartHeight;

    if (index === 0) {
      ctx.moveTo(x, y);
    } else {
      ctx.lineTo(x, y);
    }
  });
  ctx.stroke();

  // Draw listeners line
  ctx.strokeStyle = '#8b5cf6';
  ctx.lineWidth = 2;
  ctx.beginPath();

  data.forEach((point, index) => {
    const x = padding + (chartWidth / (data.length - 1)) * index;
    const y = padding + chartHeight - (point.listeners / maxValue) * chartHeight;

    if (index === 0) {
      ctx.moveTo(x, y);
    } else {
      ctx.lineTo(x, y);
    }
  });
  ctx.stroke();

  // Draw labels
  ctx.fillStyle = '#6b7280';
  ctx.font = '12px sans-serif';
  ctx.textAlign = 'center';

  data.forEach((point, index) => {
    const x = padding + (chartWidth / (data.length - 1)) * index;
    ctx.fillText(point.name, x, rect.height - 10);
  });
});
</script>
