<template>

    <Head title="Mahasiswa" />

    <AppLayout :breadcrumbs="breadcrumbs">
        <div class="w-full flex h-full flex-1 flex-col gap-4 rounded-xl p-4">
            <Card>
                <CardHeader class="flex flex-row justify-between">
                    <div>
                        <CardTitle>Data Mahasiswa</CardTitle>
                        <CardDescription>Ini Deskripisi</CardDescription>
                    </div>
                    <Button @click="GetDataMahasiwa"> Tarik Data Mahasiswa</Button>
                </CardHeader>
                <CardContent>
                    <div class="w-full">
                        <Table>
                            <TableCaption>A list of your recent invoices.</TableCaption>
                            <TableHeader>
                                <TableRow>
                                    <TableHead class="w-[100px]">
                                        Invoice
                                    </TableHead>
                                    <TableHead>Status</TableHead>
                                    <TableHead>Method</TableHead>
                                    <TableHead class="text-right">
                                        Amount
                                    </TableHead>
                                </TableRow>
                            </TableHeader>
                            <TableBody>
                                <TableRow v-for="invoice in invoices" :key="invoice.invoice">
                                    <TableCell class="font-medium">
                                        {{ invoice.invoice }}
                                    </TableCell>
                                    <TableCell>{{ invoice.paymentStatus }}</TableCell>
                                    <TableCell>{{ invoice.paymentMethod }}</TableCell>
                                    <TableCell class="text-right">
                                        {{ invoice.totalAmount }}
                                    </TableCell>
                                </TableRow>
                            </TableBody>
                        </Table>
                    </div>
                </CardContent>
            </Card>
        </div>
    </AppLayout>
</template>

<script setup lang="ts">
import Card from '@/components/ui/card/Card.vue';
import CardContent from '@/components/ui/card/CardContent.vue';
import CardDescription from '@/components/ui/card/CardDescription.vue';
import CardHeader from '@/components/ui/card/CardHeader.vue';
import CardTitle from '@/components/ui/card/CardTitle.vue';
import AppLayout from '@/layouts/AppLayout.vue';
import { type BreadcrumbItem } from '@/types';
import { Head } from '@inertiajs/vue3';
import {
    Table,
    TableBody,
    TableCaption,
    TableCell,
    TableFooter,
    TableHead,
    TableHeader,
    TableRow,
} from "@/components/ui/table"

import { Button } from '@/components/ui/button';
import MahasiswaService from '@/services/MahasiswaService';
import { ref } from 'vue';

const breadcrumbs: BreadcrumbItem[] = [
    {
        title: 'Mahasiswa',
        href: '/mahasiswa',
    },
];



const invoices = ref([] as Models.Responses.MahasiswaResponse[])

const GetDataMahasiwa = () => { 
    MahasiswaService.getDataMahasiswa().then(response => {
        invoices.value = [
            {
                invoice: "INV001",
                paymentStatus: "Paid",
                totalAmount: "$250.00",
                paymentMethod: "Credit Card",
            },
            {
                invoice: "INV002",
                paymentStatus: "Pending",
                totalAmount: "$150.00",
                paymentMethod: "PayPal",
            },
            {
                invoice: "INV003",
                paymentStatus: "Unpaid",
                totalAmount: "$350.00",
                paymentMethod: "Bank Transfer",
            },
            {
                invoice: "INV004",
                paymentStatus: "Paid",
                totalAmount: "$450.00",
                paymentMethod: "Credit Card",
            },
            {
                invoice: "INV005",
                paymentStatus: "Paid",
                totalAmount: "$550.00",
                paymentMethod: "PayPal",
            },
            {
                invoice: "INV006",
                paymentStatus: "Pending",
                totalAmount: "$200.00",
                paymentMethod: "Bank Transfer",
            },
            {
                invoice: "INV007",
                paymentStatus: "Unpaid",
                totalAmount: "$300.00",
                paymentMethod: "Credit Card",
            },
        ]


    })


}

</script>

<style scoped></style>