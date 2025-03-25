<script setup lang="ts">
import { SidebarGroup, SidebarGroupLabel, SidebarMenu, SidebarMenuButton, SidebarMenuItem } from '@/components/ui/sidebar';
import { type NavItem, type SharedData } from '@/types';
import { Link, usePage } from '@inertiajs/vue3';

defineProps<{
    items: NavItem[]; // Update NavItem type to include children
}>();

const page = usePage<SharedData>();
</script>

<template>
    <SidebarGroup class="px-2 py-0">
        <SidebarGroupLabel>Platform</SidebarGroupLabel>
        <SidebarMenu>
            <SidebarMenuItem v-for="item in items" :key="item.title">
                <SidebarMenuButton as-child :is-active="item.href === page.url" :tooltip="item.title">
                    <Link :href="item.href">
                    <component :is="item.icon" />
                    <span>{{ item.title }}</span>
                    </Link>
                </SidebarMenuButton>
                <SidebarMenu v-if="item.childs">
                    <SidebarMenuItem v-for="child in item.childs" :key="child.title">
                        <SidebarMenuButton as-child :is-active="child.href === page.url" :tooltip="child.title">
                            <Link :href="child.href">
                            <component :is="child.icon" />
                            <span>{{ child.title }}</span>
                            </Link>
                        </SidebarMenuButton>
                    </SidebarMenuItem>
                </SidebarMenu>
               
            </SidebarMenuItem>
        </SidebarMenu>
    </SidebarGroup>
</template>
