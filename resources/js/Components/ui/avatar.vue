<template>
  <div>
    <!-- Avatar Component -->
    <div 
      v-if="variant === 'avatar'"
      data-slot="avatar"
      :class="cn('relative flex size-10 shrink-0 overflow-hidden rounded-full', className)"
    >
      <slot />
    </div>
    
    <!-- AvatarImage Component -->
    <img 
      v-else-if="variant === 'image'"
      data-slot="avatar-image"
      :class="cn('aspect-square size-full', className)"
      :src="src"
      :alt="alt"
    />
    
    <!-- AvatarFallback Component -->
    <div 
      v-else-if="variant === 'fallback'"
      data-slot="avatar-fallback"
      :class="cn('bg-muted flex size-full items-center justify-center rounded-full', className)"
    >
      <slot />
    </div>
  </div>
</template>

<script setup lang="ts">
import { cn } from './utils';

interface Props {
  variant: 'avatar' | 'image' | 'fallback';
  className?: string;
  src?: string;
  alt?: string;
}

withDefaults(defineProps<Props>(), {
  className: '',
  alt: ''
});
</script>