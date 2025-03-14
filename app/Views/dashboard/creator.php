<?= $this->extend('layouts/dashboard') ?>

<?= $this->section('content') ?>
<!-- Edit Portfolio Modal -->
<div id="editModal" class="hidden fixed inset-0 bg-gray-600 bg-opacity-50 overflow-y-auto h-full w-full z-50">
    <div class="relative top-20 mx-auto p-5 border w-96 shadow-lg rounded-md bg-white">
        <div class="mt-3">
            <h3 class="text-lg font-medium text-gray-900 mb-4">Edit Portfolio</h3>
            <form id="editForm" class="space-y-4">
                <input type="hidden" id="editPortfolioId" name="id">
                <div>
                    <label class="block text-sm font-medium text-gray-700">Judul</label>
                    <input type="text" id="editTitle" name="title" 
                           class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500">
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-700">Deskripsi</label>
                    <textarea id="editDescription" name="description" rows="3" 
                            class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500"></textarea>
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-700">Kategori</label>
                    <select id="editCategory" name="category" 
                            class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500">
                        <option value="desain logo">Desain Logo</option>
                        <option value="banner">Banner</option>
                        <option value="video">Video</option>
                        <option value="gambar">Gambar</option>
                    </select>
                </div>
                <div class="mt-4 flex justify-end space-x-3">
                    <button type="button" onclick="closeEditModal()" 
                            class="px-4 py-2 text-sm font-medium text-gray-700 bg-gray-100 rounded-md hover:bg-gray-200">Batal</button>
                    <button type="submit" 
                            class="px-4 py-2 text-sm font-medium text-white bg-indigo-600 rounded-md hover:bg-indigo-700">Simpan</button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- Update Project Modal -->
<div id="updateProjectModal" class="hidden fixed inset-0 bg-gray-600 bg-opacity-50 overflow-y-auto h-full w-full z-50">
    <div class="relative top-20 mx-auto p-5 border w-96 shadow-lg rounded-md bg-white">
        <div class="mt-3">
            <h3 class="text-lg font-medium text-gray-900 mb-4">Update Status Project</h3>
            <form id="updateProjectForm" class="space-y-4">
                <input type="hidden" id="updateProjectId" name="id">
                <div>
                    <label class="block text-sm font-medium text-gray-700">Status</label>
                    <select id="updateProjectStatus" name="status" 
                            class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500">
                        <option value="pending">Pending</option>
                        <option value="process">Process</option>
                        <option value="review">Review</option>
                        <option value="done">Done</option>
                    </select>
                </div>
                <div class="mt-4 flex justify-end space-x-3">
                    <button type="button" onclick="closeUpdateProjectModal()" 
                            class="px-4 py-2 text-sm font-medium text-gray-700 bg-gray-100 rounded-md hover:bg-gray-200">
                        Batal
                    </button>
                    <button type="submit" 
                            class="px-4 py-2 text-sm font-medium text-white bg-indigo-600 rounded-md hover:bg-indigo-700">
                        Simpan
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- Create Project Modal -->
<div id="createProjectModal" class="hidden fixed inset-0 bg-gray-600 bg-opacity-50 overflow-y-auto h-full w-full z-50">
    <div class="relative top-20 mx-auto p-5 border w-96 shadow-lg rounded-md bg-white">
        <div class="mt-3">
            <h3 class="text-lg font-medium text-gray-900 mb-4">Buat Project Baru</h3>
            <form id="createProjectForm" class="space-y-4">
            <div>
                    <label class="block text-sm font-medium text-gray-700">Client ID/Nama</label>
                    <input type="text" id="clientSearch" name="client_name" 
                           class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500"
                           placeholder="Masukkan ID atau nama client"
                           required>
                    <input type="hidden" id="clientId" name="client_id">
                    <div id="clientSearchResults" class="hidden mt-1 w-full border rounded-md shadow-sm bg-white"></div>
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-700">Judul</label>
                    <input type="text" id="createProjectTitle" name="title" 
                           class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500"
                           required>
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-700">Deskripsi</label>
                    <textarea id="createProjectDescription" name="description" rows="3" 
                            class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500"
                            required></textarea>
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-700">Kategori</label>
                    <select id="createProjectCategory" name="category" 
                            class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500"
                            required>
                        <option value="desain logo">Desain Logo</option>
                        <option value="banner">Banner</option>
                        <option value="video">Video</option>
                        <option value="gambar">Gambar</option>
                    </select>
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-700">Deadline</label>
                    <input type="date" id="createProjectDeadline" name="deadline" 
                           class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500"
                           required>
                </div>
                <div class="mt-4 flex justify-end space-x-3">
                    <button type="button" onclick="closeCreateProjectModal()" 
                            class="px-4 py-2 text-sm font-medium text-gray-700 bg-gray-100 rounded-md hover:bg-gray-200">
                        Batal
                    </button>
                    <button type="submit" 
                            class="px-4 py-2 text-sm font-medium text-white bg-indigo-600 rounded-md hover:bg-indigo-700">
                        Simpan
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>

<div class="bg-white rounded-lg shadow p-6">
    <!-- Header Section -->
    <div class="flex justify-between items-center mb-6">
        <h2 class="text-2xl font-bold text-gray-900">Dashboard Kreator</h2>
        <div class="flex space-x-4">
            <button onclick="openCreateProjectModal()" 
                    class="bg-green-600 text-white px-4 py-2 rounded-lg hover:bg-green-700">
                Tambah Project
            </button>
            <a href="/portfolio/create" class="bg-indigo-600 text-white px-4 py-2 rounded-lg hover:bg-indigo-700">
                Tambah Portfolio
            </a>
        </div>
    </div>

    <!-- Flash Messages -->
    <?php if (session()->getFlashdata('success')): ?>
        <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded mb-4">
            <?= session()->getFlashdata('success') ?>
        </div>
    <?php endif; ?>

    <?php if (session()->getFlashdata('error')): ?>
        <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded mb-4">
            <?= session()->getFlashdata('error') ?>
        </div>
    <?php endif; ?>

    <!-- Portfolio Section -->
    <div class="mb-12">
        <h3 class="text-xl font-semibold text-gray-900 mb-4">Portfolio Saya</h3>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            <?php 
            $portfolioData = json_decode($debug['response'], true);
            $hasUserPortfolios = false;
            
            if (!empty($portfolioData)): 
                foreach ($portfolioData as $portfolio):
                    if($portfolio['creator_id'] == session()->get('user_id')):
                        $hasUserPortfolios = true;
            ?>
                        <div class="border rounded-lg overflow-hidden bg-white hover:shadow-lg transition-shadow duration-300">
                            <?php if ($portfolio['file_path']): ?>
                                <div class="aspect-w-16 aspect-h-9 bg-gray-100">
                                    <img src="<?= $baseURL . '/portfolio/image/' . basename($portfolio['file_path']) ?>" 
                                         alt="<?= esc($portfolio['title']) ?>" 
                                         class="object-cover w-full h-full">
                                </div>
                            <?php endif; ?>
                            <div class="p-4">
                                <h4 class="text-lg font-semibold text-gray-900"><?= esc($portfolio['title']) ?></h4>
                                <p class="text-gray-600 mt-1 line-clamp-2"><?= esc($portfolio['description']) ?></p>
                                <div class="mt-4 flex justify-between items-center">
                                    <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-blue-100 text-blue-800">
                                        <?= esc($portfolio['category']) ?>
                                    </span>
                                    <span class="text-sm text-gray-500">
                                        <?= $portfolio['likes'] ?> suka
                                    </span>
                                </div>
                                <div class="mt-4 flex justify-end space-x-2">
                                    <button onclick="openEditModal(<?= htmlspecialchars(json_encode($portfolio)) ?>)" 
                                            class="bg-blue-600 text-white px-3 py-1 rounded hover:bg-blue-700 text-sm">
                                        Edit
                                    </button>
                                    <button onclick="deletePortfolio(<?= $portfolio['id'] ?>)" 
                                            class="bg-red-600 text-white px-3 py-1 rounded hover:bg-red-700 text-sm">
                                        Hapus
                                    </button>
                                </div>
                            </div>
                        </div>
                    <?php endif;
                endforeach;
            endif;
            
            if (!$hasUserPortfolios): ?>
                <div class="col-span-full text-center py-12">
                    <p class="text-gray-500">Belum ada portfolio yang tersedia</p>
                    <p class="text-gray-500 mt-2">Klik tombol "Tambah Portfolio" untuk membuat portfolio baru</p>
                </div>
            <?php endif; ?>
        </div>
    </div>

    <!-- Projects Section -->
    <div class="mt-12">
        <h3 class="text-xl font-semibold text-gray-900 mb-4">Project Aktif</h3>
        <div class="space-y-4">
            <?php 
            $projectData = $debug['project_debug']['response'] ?? null;
            $projects = json_decode($projectData, true);
            
            if (empty($projects) || empty($projects['data'])): 
            ?>
                <div class="text-center py-8">
                    <p class="text-gray-500">Belum ada project yang aktif</p>
                </div>
            <?php else: ?>
                <?php foreach ($projects['data'] as $project): 
                    // Fetch client name
                    $client = \Config\Services::curlrequest();
                    try {
                        $nameResponse = $client->get($baseURL . '/users/findNameById?id=' . $project['client_id']);
                        $nameData = json_decode($nameResponse->getBody(), true);
                        $clientName = $nameData['name'] ?? 'Client #' . $project['client_id'];
                    } catch (\Exception $e) {
                        $clientName = 'Client #' . $project['client_id'];
                    }
                ?>
                    <div class="border rounded-lg p-4 hover:shadow-md transition-shadow bg-white">
                        <div class="flex justify-between items-start">
                            <div class="space-y-2">
                                <h4 class="text-lg font-semibold text-gray-900"><?= esc($project['title']) ?></h4>
                                <p class="text-gray-600"><?= esc($project['description']) ?></p>
                                <div class="flex items-center space-x-4">
                                    <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium 
                                        <?php
                                        switch(strtolower($project['status'])) {
                                            case 'pending':
                                                echo 'bg-yellow-100 text-yellow-800';
                                                break;
                                            case 'process':
                                                echo 'bg-blue-100 text-blue-800';
                                                break;
                                            case 'review':
                                                echo 'bg-purple-100 text-purple-800';
                                                break;
                                            case 'done':
                                                echo 'bg-green-100 text-green-800';
                                                break;
                                            default:
                                                echo 'bg-gray-100 text-gray-800';
                                        }
                                        ?>">
                                        <?= esc($project['status']) ?>
                                    </span>
                                    <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-blue-100 text-blue-800">
                                        <?= esc($project['category']) ?>
                                    </span>
                                </div>
                                <div class="mt-4 flex space-x-2">
                                    <button onclick="openUpdateProjectModal(<?= htmlspecialchars(json_encode($project)) ?>)" 
                                            class="bg-blue-600 text-white px-3 py-1 rounded hover:bg-blue-700 text-sm">
                                        Update Status
                                    </button>
                                    <button onclick="deleteProject(<?= $project['id'] ?>)"
                                            class="bg-red-600 text-white px-3 py-1 rounded hover:bg-red-700 text-sm">
                                        Hapus
                                    </button>
                                </div>
                            </div>
                            <div class="text-right">
                                <div class="text-sm text-gray-500 mb-2">
                                    Client: <?= esc($clientName) ?>
                                </div>
                                <div class="text-sm font-medium text-red-600">
                                    Deadline: <?= date('d M Y', strtotime($project['deadline'])) ?>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            <?php endif; ?>
        </div>
    </div>
</div>

<script>
// DOM Elements and Constants
const elements = {
    // Portfolio elements
    editModal: document.getElementById('editModal'),
    editForm: document.getElementById('editForm'),
    editPortfolioId: document.getElementById('editPortfolioId'),
    editTitle: document.getElementById('editTitle'),
    editDescription: document.getElementById('editDescription'),
    editCategory: document.getElementById('editCategory'),

    // Project elements
    updateProjectModal: document.getElementById('updateProjectModal'),
    updateProjectForm: document.getElementById('updateProjectForm'),
    updateProjectId: document.getElementById('updateProjectId'),
    updateProjectStatus: document.getElementById('updateProjectStatus'),

    // Create project elements
    createProjectModal: document.getElementById('createProjectModal'),
    createProjectForm: document.getElementById('createProjectForm'),
    createProjectDeadline: document.getElementById('createProjectDeadline')
};

// Modal Controllers
const modalControllers = {
    portfolio: {
        open(portfolio) {
            elements.editPortfolioId.value = portfolio.id;
            elements.editTitle.value = portfolio.title;
            elements.editDescription.value = portfolio.description;
            elements.editCategory.value = portfolio.category;
            elements.editModal.classList.remove('hidden');
        },
        close() {
            elements.editModal.classList.add('hidden');
        }
    },
    updateProject: {
        open(project) {
            elements.updateProjectId.value = project.id;
            elements.updateProjectStatus.value = project.status.toLowerCase();
            elements.updateProjectModal.classList.remove('hidden');
        },
        close() {
            elements.updateProjectModal.classList.add('hidden');
        }
    },
    createProject: {
        open() {
            elements.createProjectModal.classList.remove('hidden');
            this.setDefaultDeadline();
        },
        close() {
            elements.createProjectModal.classList.add('hidden');
        },
        setDefaultDeadline() {
            const tomorrow = new Date();
            tomorrow.setDate(tomorrow.getDate() + 1);
            elements.createProjectDeadline.value = tomorrow.toISOString().split('T')[0];
        }
    }
};

// API Handlers
const apiHandlers = {
    async deletePortfolio(id) {
        if (confirm('Apakah Anda yakin ingin menghapus portfolio ini?')) {
            window.location.href = `/dashboard/deletePortfolio/${id}`;
        }
    },

    async deleteProject(id) {
        if (!confirm('Apakah Anda yakin ingin menghapus project ini?')) return;

        try {
            const response = await fetch(`/dashboard/deleteProject/${id}`, {
                method: 'POST',
                headers: { 'Content-Type': 'application/x-www-form-urlencoded' }
            });
            const data = await response.json();

            if (data.success) {
                window.location.reload();
            } else {
                throw new Error(data.message);
            }
        } catch (error) {
            console.error('Error:', error);
            alert('Terjadi kesalahan saat menghapus project');
        }
    },

    async submitForm(url, formData, onSuccess) {
        try {
            const params = new URLSearchParams(formData);
            const response = await fetch(url, {
                method: 'POST',
                headers: { 'Content-Type': 'application/x-www-form-urlencoded' },
                body: params
            });
            const data = await response.json();

            if (data.success) {
                onSuccess();
                window.location.reload();
            } else {
                throw new Error(data.message);
            }
        } catch (error) {
            console.error('Error:', error);
            alert(error.message || 'Terjadi kesalahan saat memproses permintaan');
        }
    }
};

// Event Listeners
document.addEventListener('DOMContentLoaded', () => {
    // Form submissions
    elements.editForm.addEventListener('submit', async (e) => {
        e.preventDefault();
        const portfolioId = elements.editPortfolioId.value;
        await apiHandlers.submitForm(
            `/dashboard/updatePortfolio/${portfolioId}`,
            new FormData(e.target),
            () => modalControllers.portfolio.close()
        );
    });

    elements.updateProjectForm.addEventListener('submit', async (e) => {
        e.preventDefault();
        const projectId = elements.updateProjectId.value;
        await apiHandlers.submitForm(
            `/dashboard/updateProject/${projectId}`,
            new FormData(e.target),
            () => modalControllers.updateProject.close()
        );
    });

    elements.createProjectForm.addEventListener('submit', async (e) => {
        e.preventDefault();
        await apiHandlers.submitForm(
            '/dashboard/createProject',
            new FormData(e.target),
            () => modalControllers.createProject.close()
        );
    });

    // Modal outside clicks
    [
        { modal: elements.editModal, controller: modalControllers.portfolio },
        { modal: elements.updateProjectModal, controller: modalControllers.updateProject },
        { modal: elements.createProjectModal, controller: modalControllers.createProject }
    ].forEach(({ modal, controller }) => {
        modal.addEventListener('click', (e) => {
            if (e.target === modal) controller.close();
        });
        
        // Prevent modal close when clicking inside
        modal.querySelector('> div').addEventListener('click', (e) => {
            e.stopPropagation();
        });
    });
});

// Expose necessary functions globally
window.openEditModal = (portfolio) => modalControllers.portfolio.open(portfolio);
window.closeEditModal = () => modalControllers.portfolio.close();
window.openUpdateProjectModal = (project) => modalControllers.updateProject.open(project);
window.closeUpdateProjectModal = () => modalControllers.updateProject.close();
window.openCreateProjectModal = () => modalControllers.createProject.open();
window.closeCreateProjectModal = () => modalControllers.createProject.close();
window.deletePortfolio = (id) => apiHandlers.deletePortfolio(id);
window.deleteProject = (id) => apiHandlers.deleteProject(id);
</script>
<?= $this->endSection() ?>