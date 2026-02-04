<div class="card shadow-sm">
    <div class="card-body">
        <h5 class="mb-4">Informasi Program Latihan</h5>

        {{-- Nama Program --}}
        <div class="mb-3">
            <label for="name" class="form-label">Nama Program</label>
            <input type="text" 
                   name="name" 
                   id="name" 
                   class="form-control @error('name') is-invalid @enderror"
                   value="{{ old('name', $program->name ?? '') }}" 
                   placeholder="Contoh: Program Hipertrofi Pemula"
                   required>
            @error('name')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        {{-- Tujuan --}}
        <div class="mb-3">
            <label for="goal" class="form-label">Tujuan Latihan</label>
            <select name="goal" 
                    id="goal" 
                    class="form-select @error('goal') is-invalid @enderror" 
                    required>
                <option value="">-- Pilih Tujuan --</option>
                <option value="weight_loss" {{ old('goal', $program->goal ?? '') === 'weight_loss' ? 'selected' : '' }}>
                    Penurunan Berat Badan
                </option>
                <option value="muscle_gain" {{ old('goal', $program->goal ?? '') === 'muscle_gain' ? 'selected' : '' }}>
                    Hipertrofi Otot
                </option>
                <option value="strength" {{ old('goal', $program->goal ?? '') === 'strength' ? 'selected' : '' }}>
                    Kekuatan Otot
                </option>
            </select>
            @error('goal')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        {{-- Level --}}
        <div class="mb-3">
            <label for="experience_level" class="form-label">Level Pengalaman</label>
            <select name="experience_level" 
                    id="experience_level" 
                    class="form-select @error('experience_level') is-invalid @enderror" 
                    required>
                <option value="">-- Pilih Level --</option>
                <option value="pemula" {{ old('experience_level', $program->experience_level ?? '') === 'pemula' ? 'selected' : '' }}>
                    Pemula
                </option>
                <option value="menengah" {{ old('experience_level', $program->experience_level ?? '') === 'menengah' ? 'selected' : '' }}>
                    Menengah
                </option>
                <option value="lanjutan" {{ old('experience_level', $program->experience_level ?? '') === 'lanjutan' ? 'selected' : '' }}>
                    Lanjutan
                </option>
            </select>
            @error('experience_level')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        {{-- Frekuensi --}}
        <div class="mb-3">
            <label for="frequency" class="form-label">Frekuensi Latihan</label>
            <div class="input-group">
                <input type="number" 
                       name="frequency" 
                       id="frequency" 
                       class="form-control @error('frequency') is-invalid @enderror"
                       min="1" max="7"
                       value="{{ old('frequency', $program->frequency ?? '') }}" 
                       required>
                <span class="input-group-text">x / minggu</span>
            </div>
            @error('frequency')
                <div class="invalid-feedback d-block">{{ $message }}</div>
            @enderror
        </div>

        {{-- Durasi --}}
        <div class="mb-3">
            <label class="form-label">Durasi Program</label>
            <input type="text" 
                   class="form-control text-muted" 
                   value="Dihitung otomatis berdasarkan total latihan"
                   readonly>
            <small class="text-muted">
                Durasi akan diperbarui setelah admin menambahkan detail latihan.
            </small>
        </div>

        {{-- Deskripsi --}}
        <div class="mb-3">
            <label for="description" class="form-label">Deskripsi Program</label>
            <textarea name="description" 
                      id="description" 
                      rows="4" 
                      class="form-control"
                      placeholder="Deskripsi singkat mengenai tujuan dan karakteristik program">{{ old('description', $program->description ?? '') }}</textarea>
        </div>
    </div>
</div>
