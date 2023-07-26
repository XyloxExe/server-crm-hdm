<?php

namespace App\Entity;

use ApiPlatform\Metadata\ApiResource;
use App\Repository\PoleRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: PoleRepository::class)]
#[ApiResource]
class Pole
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $namePole = null;

    #[ORM\Column(length: 255)]
    private ?string $description = null;

    #[ORM\OneToMany(mappedBy: 'pole', targetEntity: Intern::class)]
    private Collection $interns;

    #[ORM\OneToMany(mappedBy: 'pole', targetEntity: Task::class)]
    private Collection $tasks;

    #[ORM\OneToMany(mappedBy: 'pole', targetEntity: Project::class)]
    private Collection $projects;

    public function __construct()
    {
        $this->interns = new ArrayCollection();
        $this->tasks = new ArrayCollection();
        $this->projects = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNamePole(): ?string
    {
        return $this->namePole;
    }

    public function setNamePole(string $namePole): self
    {
        $this->namePole = $namePole;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(string $description): self
    {
        $this->description = $description;

        return $this;
    }

    /**
     * @return Collection<int, Intern>
     */
    public function getInterns(): Collection
    {
        return $this->interns;
    }

    public function addIntern(Intern $intern): self
    {
        if (!$this->interns->contains($intern)) {
            $this->interns->add($intern);
            $intern->setPole($this);
        }

        return $this;
    }

    public function removeIntern(Intern $intern): self
    {
        if ($this->interns->removeElement($intern)) {
            // set the owning side to null (unless already changed)
            if ($intern->getPole() === $this) {
                $intern->setPole(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, Task>
     */
    public function getTasks(): Collection
    {
        return $this->tasks;
    }

    public function addTask(Task $task): static
    {
        if (!$this->tasks->contains($task)) {
            $this->tasks->add($task);
            $task->setPole($this);
        }

        return $this;
    }

    public function removeTask(Task $task): static
    {
        if ($this->tasks->removeElement($task)) {
            // set the owning side to null (unless already changed)
            if ($task->getPole() === $this) {
                $task->setPole(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, Project>
     */
    public function getProjects(): Collection
    {
        return $this->projects;
    }

    public function addProject(Project $project): static
    {
        if (!$this->projects->contains($project)) {
            $this->projects->add($project);
            $project->setPole($this);
        }

        return $this;
    }

    public function removeProject(Project $project): static
    {
        if ($this->projects->removeElement($project)) {
            // set the owning side to null (unless already changed)
            if ($project->getPole() === $this) {
                $project->setPole(null);
            }
        }

        return $this;
    }
}
