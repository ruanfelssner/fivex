<template>
    <div>
        <OrganismsHomeSlide />
        <div class="py-6">
            <OrganismsHomeMenu />
            <MoleculesProductCarousel :params="{ per_page: 10, orderby: 'date', order: 'desc', category: 44 }" title="Lançamento de Rodas" />
            <MoleculesProductCarousel :params="{ per_page: 10, orderby: 'date', order: 'desc', category: 45  }" title="Lançamento de Pneus" />
        </div>
        <OrganismsHomeVideo />
        <OrganismsHomeBlog />
    </div>
</template>