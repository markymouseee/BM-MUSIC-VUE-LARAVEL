<template>
  <div>
    <!-- Card Component -->
    <div 
      v-if="variant === 'card'"
      data-slot="card"
      :class="cn('bg-card text-card-foreground flex flex-col gap-6 rounded-xl border', className)"
    >
      <slot />
    </div>
    
    <!-- CardHeader Component -->
    <div 
      v-else-if="variant === 'header'"
      data-slot="card-header"
      :class="cn('@container/card-header grid auto-rows-min grid-rows-[auto_auto] items-start gap-1.5 px-6 pt-6 has-data-[slot=card-action]:grid-cols-[1fr_auto] [.border-b]:pb-6', className)"
    >
      <slot />
    </div>
    
    <!-- CardTitle Component -->
    <h4 
      v-else-if="variant === 'title'"
      data-slot="card-title"
      :class="cn('leading-none', className)"
    >
      <slot />
    </h4>
    
    <!-- CardDescription Component -->
    <p 
      v-else-if="variant === 'description'"
      data-slot="card-description"
      :class="cn('text-muted-foreground', className)"
    >
      <slot />
    </p>
    
    <!-- CardAction Component -->
    <div 
      v-else-if="variant === 'action'"
      data-slot="card-action"
      :class="cn('col-start-2 row-span-2 row-start-1 self-start justify-self-end', className)"
    >
      <slot />
    </div>
    
    <!-- CardContent Component -->
    <div 
      v-else-if="variant === 'content'"
      data-slot="card-content"
      :class="cn('px-6 [&:last-child]:pb-6', className)"
    >
      <slot />
    </div>
    
    <!-- CardFooter Component -->
    <div 
      v-else-if="variant === 'footer'"
      data-slot="card-footer"
      :class="cn('flex items-center px-6 pb-6 [.border-t]:pt-6', className)"
    >
      <slot />
    </div>
  </div>
</template>

<script setup lang="ts">
import { cn } from './utils';

interface Props {
  variant: 'card' | 'header' | 'title' | 'description' | 'action' | 'content' | 'footer';
  className?: string;
}

withDefaults(defineProps<Props>(), {
  className: ''
});
</script>