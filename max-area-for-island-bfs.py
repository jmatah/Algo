class Solution:
    def maxAreaOfIsland(self, grid: list[list[int]]) -> int:
        rows, cols = len(grid), len(grid[0])
        seen = set()
        row_dir = [0,0,1,-1]
        col_dir = [1,-1,0,0]
        res = 0 
        
        for i in range(rows):
            for j in range(cols):
                if (i, j) not in seen and grid[i][j] == 1:
                    queue = [[i, j]]
                    area = 0
                    while queue:  
                        curr = queue.pop(0)
                        seen.add((curr[0], curr[1]))
                        area += 1
                        for k in range(4):
                            nr = curr[0] + row_dir[k]
                            nc = curr[1] + col_dir[k]
                            if nr >= 0 and nr < rows and nc >= 0 and nc < cols and grid[nr][nc] == 1 and (nr, nc) not in seen:
                                queue.append([nr, nc])
                                seen.add((nr, nc))
                    res = max(res, area)
        
        return res

grid = [[0,0,1,0,0,0,0,1,0,0,0,0,0],[0,0,0,0,0,0,0,1,1,1,0,0,0],[0,1,1,0,1,0,0,0,0,0,0,0,0],[0,1,0,0,1,1,0,0,1,0,1,0,0],[0,1,0,0,1,1,0,0,1,1,1,0,0],[0,0,0,0,0,0,0,0,0,0,1,0,0],[0,0,0,0,0,0,0,1,1,1,0,0,0],[0,0,0,0,0,0,0,1,1,0,0,0,0]];
sol = Solution();
max = sol.maxAreaOfIsland(grid)
print(max)